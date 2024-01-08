<?php
		
		include "../inc/dbNew.php";
		$urlakt = "";
			//Abfrage der Personaldaten wenn vorhanden
	if (isset($_GET['persnr'])) {
		$persnr = $_GET['persnr'];
			$stmt_stammdaten_abfrage = $dbNew->prepare("SELECT * FROM personal WHERE id =?");
			$stmt_stammdaten_abfrage->bindParam(1, $persnr);
			$stmt_stammdaten_abfrage->execute();
			$stammdaten = $stmt_stammdaten_abfrage->fetchAll(PDO::FETCH_GROUP);
			//var_dump($stammdaten);
				$vorname_ist = $stammdaten[$persnr]['0']['vorname'];
				$nachname_ist = $stammdaten[$persnr]['0']['nachname'];
				$nickname_ist = $stammdaten[$persnr]['0']['nickname'];
				$arbeitszeit_ist = $stammdaten[$persnr]['0']['arbeitszeit'];
				$status_ist = $stammdaten[$persnr]['0']['status'];
				$stundenlohn_ist = $stammdaten[$persnr]['0']['stundenlohn'];
				$eintritt_ist = $stammdaten[$persnr]['0']['eintritt'];
				$austritt_ist = $stammdaten[$persnr]['0']['austritt'];
				$anschrift_ist = $stammdaten[$persnr]['0']['anschrift'];
				$plz_ist = $stammdaten[$persnr]['0']['plz'];
				$ort_ist = $stammdaten[$persnr]['0']['ort'];
				$geburtsdatum_ist = $stammdaten[$persnr]['0']['geburtsdatum'];
				$sozversnr_ist = $stammdaten[$persnr]['0']['sozversnr'];
				$mail_ist = $stammdaten[$persnr]['0']['mail'];
				$telefon_ist = $stammdaten[$persnr]['0']['telefon'];
				$urlaubsansp_ist = $stammdaten[$persnr]['0']['urlaubsansp'];
				$urlakt = $stammdaten[$persnr]['0']['urlakt'];
				

	}
					if (isset($_POST['aktion']) and $_POST['aktion'] == 'speichern') {
						$vorname = ""; 
							if (isset($_POST['vorname'])) {
								$vorname = trim($_POST['vorname']);
							}
						$nachname = "";
							if (isset($_POST['nachname'])) {
								$nachname = trim($_POST['nachname']);
							}
						$nickname = "";
							if (isset($_POST['nickname'])) {
								$nickname = trim($_POST['nickname']);
							}
						$monatStd = "";
							if (isset($_POST['monatStd'])) {
								$monatStd = trim($_POST['monatStd']);
							}
						$status = "";
							if (isset($_POST['status'])) {
								$status = trim($_POST['status']);
							}
						$datein = "";
							if (isset($_POST['datein'])) {
								$datein = $_POST['datein'];
							}
						$anschrift = "";
							if (isset($_POST['anschrift'])) {
								$anschrift = trim($_POST['anschrift']);
							}
						$plz = "";
							if (isset($_POST['plz'])) {
								$plz = trim($_POST['plz']);
							}
						$ort = "";
							if (isset($_POST['ort'])) {
								$ort = trim($_POST['ort']);
							}
						$gebdatum = "";
							if (isset($_POST['gebdatum'])) {
								$gebdatum = $_POST['gebdatum'];
							}
						$sozvers = "";
							if (isset($_POST['sozvers'])) {
								$sozvers = trim($_POST['sozvers']);
							}
						$dateout = "";
							if (isset($_POST['dateout'])) {
								$dateout = $_POST['dateout'];
							}
						$lohn = "";
							if (isset($_POST['lohn'])) {
								$lohn = trim($_POST['lohn']);
							}
						$mail = "";
							if (isset($_POST['mail'])) {
								$mail = trim($_POST['mail']);
							}
						$tel = "";
							if (isset($_POST['tel'])) {
								$tel = trim($_POST['tel']);
							}
						$urlaubsansp = "";
							if (isset($_POST['urlaubsansp'])) {
								$urlaubsansp = ($_POST['urlaubsansp']);
							}
						$urlaubakt = "";
							if (isset($_POST['urlaubakt'])) {
								$urlaubakt = ($_POST['urlaubakt']);
							}
							
				// Urlaub bei Austritt neu Berechnen
	If ($dateout !== "") {
		$stmt_url_out = $dbNew->prepare("SELECT urlaubsansp, urlakt, austritt FROM personal WHERE id = ?");
		$stmt_url_out->bindParam(1, $persnr);
		$stmt_url_out->execute();
		$url_daten = $stmt_url_out->fetch();
			//print_r($url_daten);
			$urlaubsansp = $url_daten['urlaubsansp'];
			$urlaubakt = $url_daten['urlakt'];
			$austritt_ist = $url_daten['austritt'];
		If ($dateout == $austritt_ist) {
		}
		else {
			$datumAktuell = new DateTime('NOW');		// Datum Aktuell
			$austritt = new DateTime($dateout);			// Datum Kündigung
				$austrittTag = $austritt->format("d");		//Austritt Tag
				$austrittMonat = $austritt->format("m");	//Austritt Monat
				$austrittJahr = $austritt->format("Y");		//Austritt Jahr
					$jahrAktuell = $datumAktuell->format("Y");	//Aktuelles Jahr
					$austrittMonatEnde = $austritt->format("t");	//Letzter Tag Austritt Monat
					$aktuellLetzterJahr = new DateTime("$jahrAktuell-12-31");	//31.12 Aktuelles Jahr
				
				If ($austritt<$aktuellLetzterJahr) {
							If ($austrittTag<$austrittMonatEnde) {
								$urlaubMinus = (12-$austrittMonat+1)*2.5;
									$urlaubClean = $urlaubakt-$urlaubMinus;
										//echo "Neuer Urlaubsanspruch ist ".$urlaubClean." Tage<br />";
							}
							else {
								$urlaubMinus = (12-$austrittMonat)*2.5;
									$urlaubClean = $urlaubakt-$urlaubMinus;
										//echo "Neuer Urlaubsanspruch ist ".$urlaubClean." Tage<br />";
							}
						}
			$urlaubakt_neu = $urlaubakt-$urlaubMinus;
			
		$stmt_url_out_neu = $dbNew->prepare("UPDATE personal SET urlakt= ? WHERE id = ?");
		$stmt_url_out_neu->execute(array($urlaubakt_neu, $persnr));
		}
		
	}
	
				
							
				//Abfrage ob Stammdaten Neu oder Änderung
		$stmt_stammdaten_vorhanden = $dbNew->prepare("SELECT * FROM personal WHERE id = ?");
		$stmt_stammdaten_vorhanden->bindParam(1, $persnr);
		$stmt_stammdaten_vorhanden->execute();
		$stammdaten_vorhanden = $stmt_stammdaten_vorhanden->rowCount();
			if ($stammdaten_vorhanden>0) {
				//Stammdaten Ändern
				$stmt_stammdaten_aendern = $dbNew->prepare("UPDATE personal SET vorname=?, nachname=?, nickname=?, arbeitszeit=?, status=?, stundenlohn=?, eintritt=?, austritt=?, anschrift=?, plz=?, ort=?, geburtsdatum=?, sozversnr=?, mail=?, telefon=?, urlaubsansp=? WHERE id=?");
				$stmt_stammdaten_aendern->execute(array($vorname, $nachname, $nickname, $monatStd, $status, $lohn, $datein, $dateout, $anschrift, $plz, $ort, $gebdatum, $sozvers, $mail, $tel, $urlaubsansp, $persnr));
								//Aktion Bestätigen Fenster schießen
			
					echo "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#tgeae').toggle('slow');
					});
					</script>";
			
					echo "<script>
					  window.onunload = refreshParent;
						function refreshParent() {
						window.opener.location.reload();
						}
						jQuery(document).ready(setTimeout(function fensterzu()
							{
							window.close();
							}, 2000));
					</script>";
			}
			else {
				// Neue Stammdaten eintragen
				
				// Urlaubsanspruch Aktuell Errechnen bei neuen Mitarbeitern
				$urlmonat = $urlaubsansp/12;
				//echo $urlmonat."<br />";
				$eint_tag = substr($_POST['datein'], -2, 2);
				//echo $eint_tag."<br />";
				$eint_monat = substr($_POST['datein'], -5, 2);
				//echo $eint_monat."<br />";
				If ($eint_tag > 01) {
					$rest_monate = (12 - $eint_monat);
					$urlakt = $urlmonat * $rest_monate;
				}
				else {
					$rest_monate = ( 12 - $eint_monat + 1);
					$urlakt = $urlmonat * $rest_monate;
				}
				//echo $urlakt;
				
					//Neue Stammdaten Eintragen
				$stmt_personal_neu = $dbNew->prepare("INSERT INTO personal (vorname, nachname, nickname, arbeitszeit, status, stundenlohn, eintritt, austritt, anschrift, plz, ort, geburtsdatum, sozversnr, mail, telefon, urlaubsansp, urlakt) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
				$stmt_personal_neu->execute(array($vorname, $nachname, $nickname, $monatStd, $status, $lohn, $datein, $dateout, $anschrift, $plz, $ort, $gebdatum, $sozvers, $mail, $tel, $urlaubsansp, $urlakt));
							//Aktion Bestätigen Fenster schießen

					echo "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#tok').toggle('slow');
					});
					</script>";
			
					echo "<script>
					  window.onunload = refreshParent;
						function refreshParent() {
						window.opener.location.reload();
						}
						jQuery(document).ready(setTimeout(function fensterzu()
							{
							window.close();
							}, 2000));
					</script>";
			}
					}
?>