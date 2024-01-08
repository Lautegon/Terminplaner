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
			$stmt_termin_vorhanden = $dbNew->prepare("SELECT id FROM buchungen WHERE id = ? ");
			$stmt_termin_vorhanden->execute(array($terminid_neu));
			$termin_vorhanden = $stmt_termin_vorhanden->rowCount(); //Variable zum Check ob Termin frei
			
		//If ($termin_vorhanden > 0) {
//Ausgabe zu Kontrollzwecken			
// echo "Da ist schon ein Termin!<br>";
				// }
					
				// Wenn kein Termin Existiert dann hier weiter

			//Abfrage -Zeit Rückwärts / Vorhergehende Termine- ob genügend Zeit vorhanden, Zeitcheck generiert die betreffenden ID's und fragt DB ab ob Eintrag vorhanden.
				
					//Variable mit 0 einführen um Warnung zu vermeiden!
					$letzte_belegt_id = 0;
				
		$zeitcheck_vor = $stunden_copy*60+$minuten_copy-15-120;
			$zeitcheckEnd_vor = $stunden_copy*60+$minuten_copy-15;
					for($i = $zeitcheck_vor; $i <= $zeitcheckEnd_vor; $i+=15) {
						$checkid_vor = $tagesid_copy.$raum_copy.sprintf("%02d%02d", floor($i/60), $i%60);
							$checkids_vor[] = $checkid_vor;		// Generieren IDs zur Abfrage Rückwärts
					}
//Ausgabe zu Kontrollzwecken			
// echo "Termin frei Rückwärts? Berechnete IDS!<br>";
// print_r($checkids_vor);
// echo "<br>";
					
					// Abfrage Rückwärts mit Generierten IDs
			$checkidsdb_vor = implode(',', array_fill(0, count($checkids_vor), '?'));
			
			$stmt_freizeit_vor = $dbNew->prepare('SELECT id, dauer FROM buchungen WHERE  id IN(' . $checkidsdb_vor . ')');
					foreach($checkids_vor as $k => $vid) 
						$stmt_freizeit_vor->bindValue(($k+1), $vid);
							$stmt_freizeit_vor->execute();
								$freizeit_vor = $stmt_freizeit_vor->rowCount();
					If ($freizeit_vor>0) {
					// Es Existiert ein Termin Rückwärts, letzte belegte ID wird errechnet
								$termin_all = $stmt_freizeit_vor->fetchAll(PDO::FETCH_KEY_PAIR);		
						$keys = array_keys($termin_all);
						$last_key = end($keys);
						$last_dauer = end($termin_all);
//Ausgabe zu Kontrollzwecken
// echo "Alle ID's die vom Termin belegt sind:<br>";
// print_r($keys);
//echo "<br>Letzte ID die vom Termin belegt Ist: ".$last_key;
//echo "<br>Dauer vorhergehender Termin: ".$last_dauer;

						
						//Berechnen der letzten belegt Termin id
						$datum_raum = substr($last_key, -12, 8);
						$zeit_in_minuten = substr($last_key, -4, 2)*60 + substr($last_key, -2, 2) + $last_dauer;
						$uhrzeit = sprintf("%02d%02d", floor($zeit_in_minuten/60), $zeit_in_minuten%60);
						$letzte_belegt_id = $datum_raum.$uhrzeit; //Variable zum Check ob Termin frei

						
							//If ($terminid_neu<=$letzte_belegt_id) {
								// Der neue Termin liegt in bestehendem Termin Rückwärts
//Ausgabe zu Kontrollzwecken
// echo "<br>Das ist die letzte belegt id versch: ".$letzte_belegt_id."<br>";
// echo "Hier ist ein Termin Rückwärts!!!";
							//}
					}
						// Der neue Termin ist Rückwärts in Ordnung
								
			//Abfrage Vorwärts: ob genügend Zeit vorhanden, Zeitcheck generiert die betreffenden ID's und fragt DB ab ob Eintrag vorhanden.
			
		$zeitcheck = $stunden_copy*60+$minuten_copy;
			$zeitcheckEnd = $zeitcheck+$dauer-15;
					for($i = $zeitcheck; $i <= $zeitcheckEnd; $i+=15) {
						$checkid = $tagesid_copy.$raum_copy.sprintf("%02d%02d", floor($i/60), $i%60);
							$checkids[] = $checkid; // Generieren der IDs für Termincheck Vorwärts
					}
//Ausgabe zu Kontrollzwecken
// echo "Termin frei? Berechnung vorwärts:<br>";
// print_r($checkids);
// echo "<br>";
					
			$checkidsdb = implode(',', array_fill(0, count($checkids), '?'));

			$stmt_freizeit = $dbNew->prepare('SELECT * FROM buchungen WHERE  id IN(' . $checkidsdb . ')');
					foreach($checkids as $k => $vid)
						$stmt_freizeit->bindValue(($k+1), $vid);
							$stmt_freizeit->execute();
								$freizeit = $stmt_freizeit->rowCount(); //Variable zum Check ob Termin frei


			// if ($freizeit>0) {
				//Treffer bei Termincheck Vorwärts
//Ausgabe zu Kontrollzwecken
// echo "Hier ist ein Termin Vorwärts!!!";
			// }
			
		If ($termin_vorhanden == 0 AND $terminid_neu >= $letzte_belegt_id AND $freizeit == 0) {

		$stmt_eintragen = $dbNew->prepare("INSERT INTO buchungen (id, massageart, dauer, vorname, nachname, bemerkung, mail, telefon, masseurin_1, masseurin_2, Preis, klasse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt_eintragen->execute(array($terminid_neu, $massage, $dauer, $vorname, $nachname, $info, $mail, $telefon, $mass1, $mass2, $preis, $belegt));
		
					//Mail an Kunde wenn Checkbox an
					
					If ($mailgo == "ja") {
						$empfaenger = $mail;
						$betreff = "Ihr Termin für einen kleinen Urlaub!";
						$absender = "<canangathaimassage-herzogenaurach.de>";
						$text = "Hallo ".$vorname." ".$nachname." \n Sie haben am ".$tag_copy.".".$monat_copy.".".$jahr_copy." um ".$stunden_copy.":".$minuten_copy." Uhr \n eine ".$massage." bei uns gebucht.\n Ihre kleiner Urlaub dauert ".$dauer." Minuten.\n Wir freuen uns auf Ihren Besuch!\n Ihr Cananga Team";
						
						$headers = array();
						$headers[] = "MIME-Version: 1.0";
						$headers[] = "Content-type: text/plain; charset=utf-8";
						$headers[] = "From: Cananga Thaimassage {$absender}";
						$headers[] = "Reply-To: {$absender}";
						
						mail($empfaenger, $betreff, $text, implode("\r\n",$headers));
					}					

			//Aktion Bestätigen

					$kopieren = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#kopieren').show('slow');
					});
					</script><script>
					jQuery(document).ready(setTimeout(function eintrag()
					{
					jQuery('#kopieren').hide('slow');
					}, 2500));
					</script>
					<script>
					  window.onunload = refreshParent;
						function refreshParent() {
						window.opener.location.reload();
						};
					</script>";
		}

		else {
			
			//Aktion Abgebrochen weil Termin nicht frei
			
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