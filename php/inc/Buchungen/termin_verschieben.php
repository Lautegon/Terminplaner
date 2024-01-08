<?php 
		$massage = "";
			if (isset($_POST['anwendung'])) {
				$massage = trim($_POST['anwendung']);
			}
		$dauer = "";
			if (isset($_POST['dauer'])) {
				$dauer = trim($_POST['dauer']);
				
					// Berechnung der "belegt" Klasse. Klasse wird dem Termin zugeordnet, jQuery blendet folgende Tabellenzellen aus.
					$belegungDauer = ($dauer / 15);
						if ($belegungDauer == 1) {
							$belegt = "belegt";
						}
						if ($belegungDauer == 2) {
							$belegt = "belegt_2";
						}
						if ($belegungDauer == 3) {
							$belegt = "belegt_3";
						}
						if ($belegungDauer == 4) {
							$belegt = "belegt_4";
						}
						if ($belegungDauer == 5) {
							$belegt = "belegt_5";
						}
						if ($belegungDauer == 6) {
							$belegt = "belegt_6";
						}
						if ($belegungDauer == 7) {
							$belegt = "belegt_7";
						}
						if ($belegungDauer == 8) {
							$belegt = "belegt_8";
						}
			}
		$vorname = "";
			if (isset($_POST['vorname'])) {
				$vorname = trim($_POST['vorname']);
			}
		$nachname = "";
			if (isset($_POST['nachname'])) {
				$nachname = trim($_POST['nachname']);
			}
		$info = "";
			if (isset($_POST['info'])) {
				$info = trim($_POST['info']);
			}
		$mail = "";
			if (isset($_POST['mail'])) {
				$mail = trim($_POST['mail']);
			}
		$telefon = "";
			if (isset($_POST['telefon'])) {
				$telefon = trim($_POST['telefon']);
			}
		$mass1 = "";
			if (isset($_POST['mass1'])) {
				$mass1 = trim($_POST['mass1']);
			}
		$mass2 = "";
			if (isset($_POST['mass2'])) {
				$mass2 = trim($_POST['mass2']);
			}
		$preis = "";
			if (isset($_POST['preis'])) {
				$preis = trim($_POST['preis']);
			}
		$mailgo = "";
			if (isset($_POST['mailgo'])) {
				$mailgo = trim($_POST['mailgo']);
			}
		$gutschein_nr = "";
			if (isset($_POST['gutschein_nr'])) {
				$gutschein_nr = $_POST['gutschein_nr'];
			}
		$gutschein_wert ="";
			if (isset($_POST['gutschein_wert'])) {
				$gutschein_wert = $_POST['gutschein_wert'];
			}
			
			// Abfrage ob Termin schon vorhanden ist
			$stmt_termin_vorhanden_versch = $dbNew->prepare("SELECT * FROM buchungen WHERE id = ?");
			$stmt_termin_vorhanden_versch->execute(array($terminid_versch));
			$termin_vorhanden_versch = $stmt_termin_vorhanden_versch->rowCount(); //Variable zum Check ob Termin frei
			
			//If ($termin_vorhanden_versch > 0) {
//Ausgabe zu Kontrollzwecken
// echo "Da ist schon ein Termin!<br>";	
			// }		
			
				// Wenn kein Termin Existiert dann hier weiter

			//Abfrage -Zeit Rückwärts / Vorhergehende Termine- ob genügend Zeit vorhanden, Zeitcheck generiert die betreffenden ID's und fragt DB ab ob Eintrag vorhanden.
			
					//Variable mit 0 einführen um Warnung zu vermeiden!
					$letzte_belegt_id_versch = 0;
				
		$zeitcheck_vor_versch = $stunden_versch*60+$minuten_versch-15-120;
			$zeitcheckEnd_vor_versch = $stunden_versch*60+$minuten_versch-15;
					for($i = $zeitcheck_vor_versch; $i <= $zeitcheckEnd_vor_versch; $i+=15) {
						$checkid_vor_versch = $tagesid_versch.$raum_versch.sprintf("%02d%02d", floor($i/60), $i%60);
							$checkids_vor_versch[] = $checkid_vor_versch;		// Generieren IDs zur Abfrage Rückwärts
					}
					
//Ausgabe zu Kontrollzwecken
//echo "Neue Termin id: ".$terminid_versch."</br>Termin frei Rückwärts? Berechnete IDS!<br>";
//print_r($checkids_vor_versch);
//echo "<br>";
					
					// Abfrage Rückwärts mit Generierten IDs
			$checkidsdb_vor_versch = implode(',', array_fill(0, count($checkids_vor_versch), '?'));
			
			$stmt_freizeit_vor_versch = $dbNew->prepare('SELECT id, dauer FROM buchungen WHERE  id IN(' . $checkidsdb_vor_versch . ')');
					foreach($checkids_vor_versch as $k => $vid) 
						$stmt_freizeit_vor_versch->bindValue(($k+1), $vid);
							$stmt_freizeit_vor_versch->execute();
								$freizeit_vor_versch = $stmt_freizeit_vor_versch->rowCount();
			If ($freizeit_vor_versch>0) {
					// Es Existiert ein Termin Rückwärts, letzte belegte ID wird errechnet
						$termin_all_versch = $stmt_freizeit_vor_versch->fetchAll(PDO::FETCH_KEY_PAIR);
						$keys_versch = array_keys($termin_all_versch);
						
						$last_key_versch = end($keys_versch);
						$last_dauer_versch = end($termin_all_versch);
						
		//Ausgabe zu Kontrollzwecken
			//echo "Letzter eingetragener Termin: ".$last_key_versch."</br>";
			//echo "Dauer des letzten Termins: ".$last_dauer_versch."</br>";
// echo "Alle ID's die vom Termin belegt sind:<br>";
// print_r($keys_versch);
// echo "<br>Letzte ID die vom Termin belegt Ist: ".$last_key_versch;
// echo "<br>Dauer vorhergehender Termin: ".$last_dauer_versch;

						//Berechnen der letzten belegt Termin id
						$datum_raum_versch = substr($last_key_versch, -12, 8);
						$zeit_in_minuten_versch = substr($last_key_versch, -4, 2)*60 + substr($last_key_versch, -2, 2) + $last_dauer_versch;
						$uhrzeit_versch = sprintf("%02d%02d", floor($zeit_in_minuten_versch/60), $zeit_in_minuten_versch%60);
						$letzte_belegt_id_versch = $datum_raum_versch.$uhrzeit_versch; // Variable zum Check ob Termin frei


							
				If ($terminid_versch<=$letzte_belegt_id_versch) {
					//Der neue Termin liegt in bestehendem Termin Rückwärts
//Ausgabe zu Kontrollzwecken
//echo "<br>Das ist die letzte belegt id versch: ".$letzte_belegt_id_versch."<br>";
//echo "Hier ist ein Termin Rückwärts!!!";
				}
			}
					// Der neue Termin ist Rückwärts in Ordnung			
			
		
		//Abfrage ob genügend Zeit vorhanden, Zeitcheck generiert die betreffenden ID's und fragt DB ab ob Eintrag vorhanden.
			
		$zeitcheck_versch = $stunden_versch*60+$minuten_versch;
			$zeitcheckEnd_versch = $zeitcheck_versch+$dauer-15;
					for($i = $zeitcheck_versch; $i <= $zeitcheckEnd_versch; $i+=15) {
						$checkid_versch = $tagesid_versch.$raum_versch.sprintf("%02d%02d", floor($i/60), $i%60);
							$checkids_versch[] = $checkid_versch; // Generieren der IDs für Termincheck Vorwärts
					}
//Ausgabe zu Kontrollzwecken
// echo "Termin frei? Berechnung vorwärts:<br>";
// print_r($checkids_versch);
// echo "<br>";

			$checkidsdb_versch = implode(',', array_fill(0, count($checkids_versch), '?'));
				
			$stmt_freizeit_versch = $dbNew->prepare('SELECT * FROM buchungen WHERE  id IN(' . $checkidsdb_versch . ')');
					foreach($checkids_versch as $k => $vid)
						$stmt_freizeit_versch->bindValue(($k+1), $vid);
							$stmt_freizeit_versch->execute();
								$freizeit_versch = $stmt_freizeit_versch->rowCount(); //Variable zum Check ob Termin frei
								
//Ausgabe zu Kontrollzwecken
				// if ($freizeit_versch >0) {
// echo "Hier ist ein Termin Vorwärts!!!"; // Treffer für Termincheck Vorwärts
				// }
				
		If ($termin_vorhanden_versch == 0 AND $terminid_versch >= $letzte_belegt_id_versch AND $freizeit_versch == 0) {
		
		$stmt_eintragen = $dbNew->prepare("INSERT INTO buchungen (id, massageart, dauer, vorname, nachname, bemerkung, mail, telefon, masseurin_1, masseurin_2, Preis, klasse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt_eintragen->execute(array($terminid_versch, $massage, $dauer, $vorname, $nachname, $info, $mail, $telefon, $mass1, $mass2, $preis, $belegt));

					//Mail an Kunde wenn Checkbox an
					
					If ($mailgo == "ja") {
						$empfaenger = $mail;
						$betreff = "Ihr Termin für einen kleinen Urlaub!";
						$absender = "<canangathaimassage-herzogenaurach.de>";
						$text = "Hallo ".$vorname." ".$nachname." \n Sie haben am ".$tag_versch.".".$monat_versch.".".$jahr_versch." um ".$stunden_versch.":".$minuten_versch." Uhr \n eine ".$massage." bei uns gebucht.\n Ihre kleiner Urlaub dauert ".$dauer." Minuten.\n Wir freuen uns auf Ihren Besuch!\n Ihr Cananga Team";
						
						$headers = array();
						$headers[] = "MIME-Version: 1.0";
						$headers[] = "Content-type: text/plain; charset=utf-8";
						$headers[] = "From: Cananga Thaimassage {$absender}";
						$headers[] = "Reply-To: {$absender}";
						
						mail($empfaenger, $betreff, $text, implode("\r\n",$headers));
						
					}
					
		$stmt_loeschen = $dbNew->prepare("DELETE FROM buchungen WHERE id = ?");
		$stmt_loeschen->execute(array($terminid));	
						
			//Aktion Bestätigen Fenster schießen

					$versch = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#versch').toggle('slow');
					});
					</script><script>
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
				
			$terminBelegt = "<script>
				jQuery(document).ready(function eintrag()
				{
				jQuery('#terminBelegt').show('slow');
				});
				</script><script>
				jQuery(document).ready(setTimeout(function eintrag()
				{
				jQuery('#terminBelegt').hide('slow');
				}, 2500));
				</script>";	
		}		


?>