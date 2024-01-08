<?php

//yxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxWeiter mit normaler Verarbeitung
			
			$stunden = substr($terminid,-4,2);
			$minuten = substr($terminid,-2,2);
			$tag = substr($terminid,-8,2);
			$monat = substr($terminid,-10,2);
			$jahr = substr($terminid,-12,2);
			$raum = substr($terminid,-6,2);
			$tagesid = substr($terminid,-12,6);
			
		//Aktueller Tag als Tagesid für Gutscheinbuchung in Barverkauf
		
			//$heute = new DateTime('now');
			//$tagesid_gs = $heute->format("ymd");
			//echo $tagesid_gs;
			
			
		//Abfrage und Ausführung, Soll Termin gelöscht werden? Anfrage kommt von terminform.php
	if (isset($_GET['aktionDel_1']) and $_GET['aktionDel_1'] == 'loeschen_1') {
		include "deleterm.php";		//Script Termin aus Datenbank Löschen. / Aufruf neues Fenster mit Formular um die Löschung zu Bestätigen.
	}
	
	//xxxxxxxxxxxxxxxxxxxxxxxx Gutschein vorhanden? Bezahlung mit Gutschein, Wert des Gutscheins ändern xxxxxxxxxxxxxxx
				//Gutscheinwert abrufen, neu Berechnen
					$gutschein_nr = "";
						if (isset($_POST['gutschein_nr'])) {
							$gutschein_nr = $_POST['gutschein_nr'];
						}
					$gutschein_wert ="";
						if (isset($_POST['gutschein_wert'])) {
							$gutschein_wert = $_POST['gutschein_wert'];
						}
					$artikelArt = "";
						if (isset($_POST['anwendung'])) {
						$artikelArt = $_POST['anwendung'];
						}

				
			If (isset($gutschein_nr) and $gutschein_nr != "") {
				$stmt_gutschein_rechner = $dbNew->prepare("SELECT id, wert, verkauf_tag FROM gutschein WHERE gutschein_nr = ?");
				$stmt_gutschein_rechner->execute(array($gutschein_nr));
				$gutschein_check = $stmt_gutschein_rechner->rowCount();
				
				If ($gutschein_check>0) {
							while($gutschein_werte = $stmt_gutschein_rechner->fetch()) {
								$gutschein_id = $gutschein_werte['id'];
								$gutschein_wert_alt = $gutschein_werte['wert'];
								$verkauf_tag = $gutschein_werte['verkauf_tag'];
							}
							
						$gutschein_wert_neu = ($gutschein_wert_alt - $gutschein_wert);
							
					If ($gutschein_wert_neu < 0 ) {
							$gsminus ="<script>
								jQuery(document).ready(function eintrag()
								{
								jQuery('#gsminus').show('slow');
								});
								</script><script>
								jQuery(document).ready(setTimeout(function eintrag()
								{
								jQuery('#gsminus').hide('slow');
								}, 2500));
								</script>";

						goto nummer_falsch;
					}
					
						else {
							
					$gutschein_bes = $stunden.":".$minuten." Uhr / Raum ".$raum."<br />".$_POST['vorname']." ".$_POST['nachname'];
						
							//Gutschein mit bezahltem Wert in kassenbuch eintragen
							$stmt_barverkauf_gs = $dbNew->prepare("INSERT INTO barverkauf (tagesid, artikel, wert, gutscheinnr, verkauf_tag, preis, beschreibung, klasse) VALUE (?, ?, ?, ?, ?, ?, ?, ?)");
							$stmt_barverkauf_gs->execute(array($tagesid, $artikelArt, "GS Einlösen", $gutschein_nr, $verkauf_tag, $gutschein_wert, $gutschein_bes, "gs"));

								
						//Wenn neuer Wert 0 Gutschein löschen
							If ($gutschein_wert_neu == 0) {
								$stmt_gutschein_loeschen = $dbNew->prepare("DELETE FROM gutschein WHERE id = ?");
								$stmt_gutschein_loeschen->execute(array($gutschein_id));
							}
								//Neuen Wert Gutschein Eintragen
							else {	
								$stmt_gutschein_wert_neu = $dbNew->prepare("UPDATE gutschein SET wert = ?, wert_neu_tag = ? where id = ?");
								$stmt_gutschein_wert_neu->execute(array($gutschein_wert_neu, $tagesid, $gutschein_id));
							}
						}
				}
				else {
					$gsfalsch = "<script>
						jQuery(document).ready(function eintrag()
						{
						jQuery('#gsfalsch').show('slow');
						});
						</script><script>
						jQuery(document).ready(setTimeout(function eintrag()
						{
						jQuery('#gsfalsch').hide('slow');
						}, 2500));
						</script>";

				goto nummer_falsch;
					
				}
			}
//xxxxxxxxxxxxxxxxxxxxxx Bis hier Bezahlung mit Gutschein xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

//xxxxx Massage Bezahlung mit Überweisung! Betrag wird auch in Barverkauf mit Klasse Überweisung eingetragen! xxxxxxxxxxxxxxxxxxxx

	If (isset($_POST['uew']) AND ($_POST['uew'] == "ja") AND ($_POST['preis'] != "")) {
		
			$uew_Massage = trim($_POST['anwendung']);
			$uew_Preis = trim($_POST['preis']);
			$uew_Info = $stunden.":".$minuten." Uhr / Raum ".$raum."<br />".$_POST['vorname']." ".$_POST['nachname'];
		
		$stmt_bar_uew = $dbNew->prepare("INSERT INTO barverkauf (tagesid, artikel, wert, preis, beschreibung, klasse) VALUE (?, ?, ?, ?, ?, ?)");		//Artikel auf Massage und Klasse auf uew_MA geändert !!!!!!!!!!!!!
		$stmt_bar_uew->execute(array($tagesid, $uew_Massage, "Massage", $uew_Preis, $uew_Info, "uew_MA"));
	}
//xxxxxxxxx Ende Massage mit Überweisung Bezahlt ! xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx

	
		//Abfrage und Ausführung, Soll Termin gespeichert werden? Anfrage kommt von terminform.php
	if (isset($_POST['aktion_speichern']) and $_POST['aktion_speichern']=='speichern') {

		$massage = "";
			if (isset($_POST['anwendung'])) {
				$massage = trim($_POST['anwendung']);
			}
		$dauer = "";
			if (isset($_POST['dauer'])) {
				$dauer = trim($_POST['dauer']);
					// Berechnung der "belegt" Klasse. Klasse wird dem Termin zugeordnet.
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
			
		$terminid = $_POST['tid'];
		$datum_aus_tid = substr($terminid,-11,6);
		
			//Abfrage ist Termin schon vorhanden? Änderung eintragen! Anfrage kommt von terminform.php
			//Hier wird Überprüft ob der Termin schon Gespeichert war -> wenn wahr wird Aktualisiert
			
		$stmt_abfrage_aendern = $dbNew->prepare("SELECT * From buchungen where id = ?");
		$stmt_abfrage_aendern->bindParam(1, $terminid);
		$stmt_abfrage_aendern->execute();
		$result_aendern = $stmt_abfrage_aendern->rowCount();	
		
		if ($result_aendern>0) {
		
			//Abfrage ob genügend Zeit vorhanden, Zeitcheck generiert die betreffenden ID's und fragt DB ab ob Eintrag vorhanden.
			
		$zeitcheck = $stunden*60+$minuten+15;
				//echo "Zeitcheck Start: ".$zeitcheck."<br />";
			$zeitcheckEnd = $zeitcheck+$dauer-30;
				//echo "Zeitcheck Ende: ". $zeitcheckEnd."<br />";
					for($i = $zeitcheck; $i <= $zeitcheckEnd; $i+=15) {
						$checkid = $tagesid.$raum.sprintf("%02d%02d", floor($i/60), $i%60);
							$checkids[] = $checkid;
					}
						//print_r($checkids);
			$checkidsdb = implode(',', array_fill(0, count($checkids), '?'));

			$stmt_freizeit = $dbNew->prepare('SELECT * FROM buchungen WHERE  id IN(' . $checkidsdb . ')');
					foreach($checkids as $k => $vid)
						$stmt_freizeit->bindValue(($k+1), $vid);
							$stmt_freizeit->execute();
								$freizeit = $stmt_freizeit->rowCount();
								

				if ($freizeit == 0) {
					$stmt_aendern = $dbNew->prepare("UPDATE buchungen SET massageart=?, dauer=?, vorname=?, nachname=?, bemerkung=?, mail=?, telefon=?, masseurin_1=?, masseurin_2=?, Preis=?, klasse=? where id = ?");
					$stmt_aendern->execute(array($massage, $dauer, $vorname, $nachname, $info, $mail, $telefon, $mass1, $mass2, $preis, $belegt, $terminid));
			
			
				//Mail an Kunde wenn Checkbox an
					If ($mailgo == "ja") {
						$empfaenger = $mail;
						$betreff = "Ihr Termin für einen kleinen Urlaub!";
						$absender = "<canangathaimassage-herzogenaurach.de>";
						$text = "Hallo ".$vorname." ".$nachname." \n
						Sie haben am ".$tag.".".$monat.".".$jahr." um ".$stunden.":".$minuten." Uhr \n
						eine ".$massage." bei uns gebucht.\n
						Ihre kleiner Urlaub dauert ".$dauer." Minuten.\n
						Wir freuen uns auf Ihren Besuch!\n
						Ihr Cananga Team";
						
						$headers = array();
						$headers[] = "MIME-Version: 1.0";
						$headers[] = "Content-type: text/plain; charset=utf-8";
						$headers[] = "From: Cananga Thaimassage {$absender}";
						$headers[] = "Reply-To: {$absender}";
						
						mail($empfaenger, $betreff, $text, implode("\r\n",$headers));
						
					}
			
				//Aktion Bestätigen Fenster schießen
			
					$tgeae = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#tgeae').toggle('slow');
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
					
					$zchk = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#zchk').toggle('slow');
					});
					</script><script>
					jQuery(document).ready(setTimeout(function fensterzu()
					{
					window.close();
					}, 2000));
					</script>";
			}
		}			

//xxxxxxxxxxxxxxxxxxx Bis hier wird die verfügbare Zeit Abgefragt und Überprüft. Bestehende Termine geändert xxxxxxxxxxxxxxxxxxx
			
//xxxxxxxxxxxxxxxxxx War Termin noch nicht vorhanden, wird neuer Termin eingetragen xxxxxxxxxxxxxxxxxxxxxxx

					//Neuer Termin wird Eingetragen! Anfrage kommt von terminform.php
		else {
				
			//Abfrage ob genügend Zeit vorhanden, Zeitcheck generiert die betreffenden ID's und fragt DB ab ob Eintrag vorhanden.
			
		$zeitcheck = $stunden*60+$minuten;
				//echo "Zeitcheck Start: ".$zeitcheck."<br />";
			$zeitcheckEnd = $zeitcheck+$dauer-15;
				//echo "Zeitcheck Ende: ". $zeitcheckEnd."<br />";
					for($i = $zeitcheck; $i <= $zeitcheckEnd; $i+=15) {
						$checkid = $tagesid.$raum.sprintf("%02d%02d", floor($i/60), $i%60);
							$checkids[] = $checkid;
					}
						//print_r($checkids);
			$checkidsdb = implode(',', array_fill(0, count($checkids), '?'));

			$stmt_freizeit = $dbNew->prepare('SELECT * FROM buchungen WHERE  id IN(' . $checkidsdb . ')');
					foreach($checkids as $k => $vid)
						$stmt_freizeit->bindValue(($k+1), $vid);
							$stmt_freizeit->execute();
								$freizeit = $stmt_freizeit->rowCount();
								
			If ($freizeit == 0) {
				
	//echo "Termin wird eingetragen Terminid = ".$terminid;
		$stmt_eintragen = $dbNew->prepare("INSERT INTO buchungen (id, massageart, dauer, vorname, nachname, bemerkung, mail, telefon, masseurin_1, masseurin_2, Preis, klasse) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt_eintragen->execute(array($terminid, $massage, $dauer, $vorname, $nachname, $info, $mail, $telefon, $mass1, $mass2, $preis, $belegt));

					//Mail an Kunde wenn Checkbox an
					
					If ($mailgo == "ja") {
						$empfaenger = $mail;
						$betreff = "Ihr Termin für einen kleinen Urlaub!";
						$absender = "<canangathaimassage-herzogenaurach.de>";
						$text = "Hallo ".$vorname." ".$nachname." \n Sie haben am ".$tag.".".$monat.".".$jahr." um ".$stunden.":".$minuten." Uhr \n eine ".$massage." bei uns gebucht.\n Ihre kleiner Urlaub dauert ".$dauer." Minuten.\n Wir freuen uns auf Ihren Besuch!\n Ihr Cananga Team";
						
						$headers = array();
						$headers[] = "MIME-Version: 1.0";
						$headers[] = "Content-type: text/plain; charset=utf-8";
						$headers[] = "From: Cananga Thaimassage {$absender}";
						$headers[] = "Reply-To: {$absender}";
						
						mail($empfaenger, $betreff, $text, implode("\r\n",$headers));
						
					}
						
			//Aktion Bestätigen Fenster schießen

					$tok = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#tok').toggle('slow');
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
				$zchk = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#zchk').toggle('slow');
					});
					</script><script>
					jQuery(document).ready(setTimeout(function fensterzu()
					{
					window.close();
					}, 2000));
					</script>";
			}
			
		}
	}		

else {
			
nummer_falsch:
			//Erstaufruf terminform.php, wenn Termin schon vorhanden wird er in der Form Angezeigt
		$stmt_abfrage = $dbNew->prepare("SELECT * From buchungen where id = ?");
		$stmt_abfrage->bindParam(1, $terminid);
		$stmt_abfrage->execute();
		$result = $stmt_abfrage->rowCount();
		
			// Abfrage ob Ergebnis Einträge > 0  //  dann Ausgeben
		if ($result >0) {
				while($row = $stmt_abfrage->fetch()) {
					$ist_massage = $row['massageart'];
					$ist_dauer = $row['dauer'];
					$ist_vorname = $row['vorname'];
					$ist_nachname = $row['nachname'];
					$ist_bemerkung = $row['bemerkung'];
					$ist_mail = $row['mail'];
					$ist_telefon = $row['telefon'];
					$ist_mass1 = $row['masseurin_1'];
					$ist_mass2 = $row['masseurin_2'];
					$ist_preis = $row['Preis'];
					$ist_klasse = $row['klasse'];
				}
		}
		 

	}
	
//xxxxxxxxxxxxxxxxxxx Termin verschieben xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		if (isset($_POST['aktion_verschieben']) and $_POST['aktion_verschieben'] == "verschieben" and (isset($_POST['datum_neu']) and $_POST['datum_neu'] != "") and (isset($_POST['zeit_neu']) and $_POST['zeit_neu'] != "") ) {
				$datum_neu_versch = new DateTime($_POST['datum_neu']);
				$zeit_neu_versch = new DateTime($_POST['zeit_neu']);
			$terminid_versch = $datum_neu_versch->format("ymd").$_POST['raum_neu'].$zeit_neu_versch->format("Hi");
			
			$stunden_versch = substr($terminid_versch,-4,2);
			$minuten_versch = substr($terminid_versch,-2,2);
			$tag_versch = substr($terminid_versch,-8,2);
			$monat_versch = substr($terminid_versch,-10,2);
			$jahr_versch = substr($terminid_versch,-12,2);
			$raum_versch = substr($terminid_versch,-6,2);
			$tagesid_versch = substr($terminid_versch,-12,6);
			

		include "termin_verschieben.php";
		}
		

		
//xxxxxxxxxxxxxxxxxxx Termin stornieren xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		if (isset ($_POST['aktion_storno']) and $_POST['aktion_storno'] == "stornieren") {
			include "stornieren.php";
		}
		
//xxxxxxxxxxxxxxxxxxx Termin kopieren xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	if (isset($_POST['aktion_kopieren']) and $_POST['aktion_kopieren'] == "kopieren" and (isset($_POST['datum_copy']) and $_POST['datum_copy'] != "") and (isset($_POST['zeit_copy']) and $_POST['zeit_copy'] != "")) {

					$datum_neu = new DateTime($_POST['datum_copy']);
					$zeit_neu = new DateTime($_POST['zeit_copy']);
					$terminid_neu = $datum_neu->format("ymd").$_POST['raum_copy'].$zeit_neu->format("Hi");
								
					$stunden_copy = substr($terminid_neu,-4,2);
					$minuten_copy = substr($terminid_neu,-2,2);
					$tag_copy = substr($terminid_neu,-8,2);
					$monat_copy = substr($terminid_neu,-10,2);
					$jahr_copy = substr($terminid_neu,-12,2);
					$raum_copy = substr($terminid_neu,-6,2);
					$tagesid_copy = substr($terminid_neu,-12,6);		
					
		include "termin_kopieren.php";	
	}
	
	
?>