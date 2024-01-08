<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

	// Variablen für Ausgabe Fehler mit JS einführen
	$nummer_falsch = "";
	$gs_minus = "";
	$gutscheinnr = "";

			//Neueste Belegnummer Ermitteln
		$stmt_beleg_nr = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid =? and belegnr != ''");
		$stmt_beleg_nr->execute(array($tagesid));
		$a_nr_neu = $datumBelege."A".$stmt_beleg_nr->rowCount()+1;

		
			//Neueste Gutscheinnummer Ermitteln
		$stmt_gs_nr = $dbNew->prepare("SELECT * FROM barverkauf WHERE (tagesid = ? and gutscheinnr != '' and wert = 'Einnahme') or (tagesid = ? and gutscheinnr != '' and wert = 'Bar_Ein_Storno') ");
		$stmt_gs_nr->execute(array($tagesid, $tagesid));
		$gs_nr_neu = $datumBelege."G".$stmt_gs_nr->rowCount()+1;
		
			//Wechselgeld Buchen
	If (isset($_POST['wechselgeld']) AND $_POST['wechselgeld'] == 'einzahlen') {
		$startGeld = $_POST['startGeld'];
		//echo "Summe Wechselgeld: ".$startGeld;
		$stmt_wechselgeld_einzahlen = $dbNew->prepare("INSERT INTO kassenstand (tagesid, wert, preis) VALUE (?, ?, ?)");
		$stmt_wechselgeld_einzahlen->execute(array($tagesid, "startKasse", $startGeld));
		
		header("Location: {$_SERVER['REQUEST_URI']}", true, 303 );
			exit();
	}



//xxxxxxxxxxxx Stornieren Verkäufe Bar oder per Überweisung xxxxxxxxx
		
	//Verkäufe Bar und UEW stornieren
	If (isset($_POST['del_bar_id']) and $_POST['del_bar_id'] == 'bar_loeschen') {
		$del_bar_id = $_POST['id'];
		$del_gutscheinnr = trim($_POST['del_gutscheinnr']);
		$artikel = $_POST['artikel'];
		$wert = $_POST['wert'];
		$klasse = $_POST['klasse'];

	// Wenn Wert "Einnahme" und Gutscheinnummer ist da = Gutscheinverkauf -> aus DB gutschein löschen!
		If ($artikel == "Gutschein" and isset($del_gutscheinnr) and $del_gutscheinnr != "" ) { 
			$stmt_gutschein_out = $dbNew->prepare("DELETE FROM gutschein WHERE gutschein_nr = ?");
			$stmt_gutschein_out->execute(array($del_gutscheinnr));
		}
		
		$stmt_bar_storno = $dbNew->prepare("UPDATE barverkauf SET klasse = ?, wert = ? WHERE id = ?");
		$stmt_bar_storno->execute(array($klasse, $wert, $del_bar_id));
	}
//xxxxxxxxxxxxxxx Ende Verkäufe Bar oder per Überweisung Stornieren xxxxxxxxxxxxxxxxxxxxxxxxxx
	
	
//xxxxxxxxxxxxxxxxxx Verkäufe mit Gutschein stornieren xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
			
	If (isset($_POST['del_bar_id']) and $_POST['del_bar_id'] == 'gs_loeschen') {
		$del_bar_id = $_POST['id'];
		$del_gutscheinnr = trim($_POST['del_gutscheinnr']);
		$artikel = $_POST['artikel'];
		$preis = $_POST['preis'];
		$wert = $_POST['wert'];
		$klasse = $_POST['klasse'];
		
		
	//Warenverkauf mit Gutschein Stornieren
		$stmt_storno_gsverkauf = $dbNew->prepare("UPDATE barverkauf SET klasse = ?, wert = ? WHERE id = ?");
		$stmt_storno_gsverkauf->execute(array($klasse, $wert, $del_bar_id));
		
	//Stornierte Gutscheineinlösungen wieder Gutschreiben
	
		// Abfrage ob Gutschein noch Wert in DB gutschein hat
		$stmt_gs_vorhanden = $dbNew->prepare("SELECT * FROM gutschein WHERE gutschein_nr = ?");
		$stmt_gs_vorhanden->execute(array($del_gutscheinnr));
		$gs_vorhanden = $stmt_gs_vorhanden->rowCount();
		
		//Abfrage des Gutscheinverlaufs in DB barverkauf
		$stmt_reGS_barverkauf = $dbNew->prepare("SELECT * FROM barverkauf WHERE gutscheinnr = ? ");
		$stmt_reGS_barverkauf->execute(array($del_gutscheinnr));
		$reGS = $stmt_reGS_barverkauf->fetchAll(PDO::FETCH_ASSOC);
		//print_r ($reGS);
		//echo "<br />";
		
		//Gutscheindaten aus barverkauf ermitteln
			foreach ($reGS AS $GSre) {
				If ($GSre['wert'] == "Einnahme" AND $GSre['artikel'] == "Gutschein") {
					$kaufPreis = $GSre['preis'];
					$verkaufTag = $GSre['tagesid'];
					$kaufInfo = $GSre['beschreibung'];
					//echo $kaufPreis."<br />";
				}
				If ($GSre['wert'] == "GS Einlösen") {
					$eingeloest[] = $GSre['preis'];

				}
			}
			
					//echo "Alle Eingelösten Werte";
					//print_r($eingeloest);
			
			If (empty($eingeloest)) {
				$gsverbraucht = 0;
			}
			else {
				$gsverbraucht = array_sum($eingeloest);
				echo "<br />Summe verbraucht: ".$gsverbraucht;
			}
			$wertAktuell = $kaufPreis-$gsverbraucht;
			//echo "<br />Aktueller Wert: ".$wertAktuell;
		
		//Gutschein in DB gutschein Wiederherstellen wenn schon gelöscht
		If ($gs_vorhanden == 0) {
			$stmt_reGS = $dbNew->prepare("INSERT INTO gutschein (verkauf_tag, gutschein_nr, wert, wert_kauf, wert_neu_tag, beschreibung) VALUE (?, ?, ?, ?, ?, ?)");
			$stmt_reGS->execute(array($verkaufTag, $del_gutscheinnr, $preis, $kaufPreis, $tagesid, $kaufInfo));
		}
		
		//Wert dem noch vorhanden Gutschein wieder Gutschreiben
		If ($gs_vorhanden > 0) {
			$stmt_gsBack = $dbNew->prepare("UPDATE gutschein SET wert = ?, wert_neu_tag = ? WHERE gutschein_nr = ?");
			$stmt_gsBack->execute(array($wertAktuell, $tagesid, $del_gutscheinnr));
		}
	}		//Gutscheinwerte wieder Gutgeschrieben

	//xxxxxxxxxxx Stornieren Ende xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	
	//xxxxxxxxxxxxxxxxxx Verkäufe mit Gutschein Bezahlt / Restwert Gutschein als Trinkgeld / Gutschein Einnahmen in Kassenbuch schreiben xxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	
	If (isset($_POST['gs_verkauf']) and $_POST['gs_verkauf'] == "gs_buchen") {
		
				$gs_tagesid = trim($_POST['gs_tagesid']);
				$gs_wert = $_POST['gs_wert'];			// Hier kommt auch Trinkgeld
				$gs_preis = trim($_POST['gs_artikelpreis']);
				$gs_en_nr = trim($_POST['gs_en_nr']);
				$gs_artikel = trim($_POST['gs_artikel']); 		// Hier kommt auch Trinkgeld
				$gs_bes_form = trim($_POST['gs_bes']);
				$datum_gs = DateTime::createFromFormat('ymd', $gs_tagesid);
				$datum_aus_tid = $datum_gs->format('d.m.Y');
		
		
		
		//Gutscheintausch markieren, Beschreibung Gutscheintausch in DB schreiben
		If ($gs_artikel == 'Gutschein') {
			$gs_bes = 'Gutscheintausch! '.$gs_bes_form;
		}
		else {
			$gs_bes = $gs_bes_form;
		}

				
					// Check Gutscheinnummer vorhanden
			$stmt_gutschein_check = $dbNew->prepare("SELECT id, wert, verkauf_tag FROM gutschein WHERE gutschein_nr = ?");
			$stmt_gutschein_check->execute(array($gs_en_nr));
			$gutschein_check = $stmt_gutschein_check->rowCount();
				
		If ($gutschein_check == 0) {
				$nummer_falsch = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#nrfalsch').show('slow');
					});
					</script><script>
					jQuery(document).ready(setTimeout(function eintrag()
					{
					jQuery('#nrfalsch').hide('slow');
					}, 2500));
					</script>";
			goto fertig;
		}
					// Check Gutscheinwert
		else {
			while($gutschein_werte = $stmt_gutschein_check->fetch()) {
					$gutschein_id = $gutschein_werte['id'];
					$verkauf_tag = $gutschein_werte['verkauf_tag'];
					$gutschein_wert_alt = $gutschein_werte['wert'];
			}
			
			$gutschein_wert_neu = ($gutschein_wert_alt - $gs_preis);
		
					
				If ($gutschein_wert_neu < 0 ) {
					$gs_minus = "<script>
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
						
						goto fertig;
				}
				
					// Gutschein löschen wenn Wert 0
				If ($gutschein_wert_neu == 0) {
					$stmt_gutschein_loeschen = $dbNew->prepare("DELETE FROM gutschein WHERE id = ?");
					$stmt_gutschein_loeschen->execute(array($gutschein_id));
				}
					//Neuen Wert Gutschein Eintragen
				else {	
					$stmt_gutschein_wert_neu = $dbNew->prepare("UPDATE gutschein SET wert = ?, wert_neu_tag = ? where id = ?");
					$stmt_gutschein_wert_neu->execute(array($gutschein_wert_neu, $gs_tagesid, $gutschein_id));
				}
	
					// Wenn alle Werte OK sind, in Barverkauf Eintragen, ausser $gs_wert ist Trinkgeld
		If ($gs_wert == "GS Einlösen" OR $gs_wert == "GS Einlösen -%") {    // Hier passiert die Unterscheidung Trinkgeld = Kein Eintrag!!!
		$stmt_einnahme_gs = $dbNew->prepare("INSERT INTO barverkauf (tagesid, artikel, wert, gutscheinnr, verkauf_tag, preis, beschreibung, klasse) VALUE (?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt_einnahme_gs->execute(array($gs_tagesid, $gs_artikel, $gs_wert, $gs_en_nr, $verkauf_tag, $gs_preis, $gs_bes, "gs_wa"));
		
		}
		}
			header("Location: {$_SERVER['REQUEST_URI']}", true, 303 );
			exit();
	}	//xxxxxxxxxxxxxxxxxx Bearbeitung Verkauf auf Gutschein Ende xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		
	
	
				//Barverkäufe Speichern
	If (isset($_POST['barverkauf']) and $_POST['barverkauf'] == "buchen" and $_POST['artikel'] != "" and $_POST['artikelpreis'] != "") {
		$tagesid_bar = $_POST['tagesid'];
		$artikel = trim($_POST['artikel']);
		$preis = trim($_POST['artikelpreis']);
		$wert = trim($_POST['wert']);
		$bar_bes = trim($_POST['bar_bes']);
		$belegnr = "";
		$bar_uew = "";

		
			// Abfrage ob Überweisung
		If (isset($_POST['bar_uew']) and $_POST['bar_uew'] == "ja") {
				$bar_uew = "uew";
		}
	
		If (($wert == "Ausgabe" OR $wert == "Ausgabe -%" OR $wert == "Ausgabe 0%") and $artikel != "Gutschein") {
				$belegnr = trim($_POST['a_nr']);
				}
	
		If ($artikel == "Gutschein" and $wert == "Einnahme" ) {
				$gutscheinnr = trim($_POST['gs_nr']);
					
					$stmt_gutscheinnr_check = $dbNew->prepare("SELECT * FROM gutschein WHERE gutschein_nr = ?");
					$stmt_gutscheinnr_check->execute(array($gutscheinnr));
					$gutschein_check_ok = $stmt_gutscheinnr_check->rowCount();
					
					If ($gutschein_check_ok > 0) {
						$gutscheinnr = "<script>
						jQuery(document).ready(function eintrag()
						{
						jQuery('#nummerplus').show('slow');
						});
						</script><script>
						jQuery(document).ready(setTimeout(function eintrag()
						{
						jQuery('#nummerplus').hide('slow');
						}, 2500));
						</script>";
						
						goto fertig;
					}
					else {
					$stmt_gutschein_in = $dbNew->prepare("INSERT INTO gutschein (verkauf_tag, gutschein_nr, wert, wert_kauf, beschreibung) VALUE (?, ?, ?, ?, ?)");
					$stmt_gutschein_in->execute(array($tagesid_bar, $gutscheinnr, $preis, $preis, $bar_bes));
					}
		}


			$stmt_barverkauf_in = $dbNew->prepare("INSERT INTO barverkauf (tagesid, artikel, wert, gutscheinnr, verkauf_tag, belegnr, preis, beschreibung, klasse ) VALUE (?, ?, ?, ?, ?, ?, ?, ?, ?)");
			$stmt_barverkauf_in->execute(array($tagesid_bar, $artikel, $wert, $gutscheinnr, $tagesid_bar, $belegnr, $preis, $bar_bes, $bar_uew));
			
			header("Location: {$_SERVER['REQUEST_URI']}", true, 303 );
			exit();
			
	}
	
	//xxxxxxxxxxxxxxxxxxxxxx Tabellenausgabe im Fenster Barverkaufxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
	
	fertig:	

				// Abfrage Verkauf Bar
			$stmt_einnahme_bar = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ?) AND klasse = ? ORDER BY id");
			$stmt_einnahme_bar->execute(array($tagesid, "Einnahme", "Einnahme -%", ""));
			$einnahme_bar = $stmt_einnahme_bar->fetchAll(PDO::FETCH_ASSOC);
			//var_dump ($einnahme_bar);
			
				// Abfrage Verkauf mit Gutschein
			$stmt_einnahme_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ?) AND klasse = ? ORDER BY id");
			$stmt_einnahme_gs->execute(array($tagesid, "GS Einlösen", "GS Einlösen -%", "gs_wa"));
			$einnahme_gs = $stmt_einnahme_gs->fetchAll(PDO::FETCH_ASSOC);
			//var_dump ($einnahme_gs);
			
				// Abfrage Verkauf per Überweisung
			$stmt_einnahme_uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ?) AND klasse = ? ORDER BY id");
			$stmt_einnahme_uew->execute(array($tagesid, "Einnahme", "Einnahme -%", "uew"));
			$einnahme_uew = $stmt_einnahme_uew->fetchAll(PDO::FETCH_ASSOC);
			//var_dump ($einnahme_uew);

		
			// Tabellenausgabe Verkauf Einnahme
		
	function getVerkauf() {
		global $einnahme_bar;
		global $einnahme_gs;
		global $einnahme_uew;
		global $datumBarNeu;
			
					//Ausgabe Tabelle Bareinnahmen
		echo '<table class ="barverkauf">
		<tr><th class ="th_bar">Einnahmen</th><th class ="bar"> </th><th class="th_bar" colspann="2">Bar</th></tr>
		<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';

			foreach($einnahme_bar AS $satz_bar) {
				$umsatz_bar[] = $satz_bar['preis'];
			
					echo '<form action="#" method="post">';
					echo '<input type="hidden" name="del_bar_id" value="bar_loeschen">'; 	//Stornieren beginnen
					echo '<input type="hidden" name="id" value="'.$satz_bar['id'].'">';		// ID aus Barverkauf
					echo '<input type="hidden" name="del_gutscheinnr" value="'.$satz_bar['gutscheinnr'].'">'; // Gutscheinnummer
					echo '<input type="hidden" name="artikel" value="'.$satz_bar['artikel'].'">';
					echo '<input type="hidden" name="wert" value="Bar_Ein_Storno">';
					echo '<input type="hidden" name="klasse" value="storno">';
					echo "<tr><td>".$datumBarNeu."</td><td>".$satz_bar['artikel']."</td><td>".$satz_bar['gutscheinnr']."</td><td>".$satz_bar['preis']."&nbsp;€</td><td>".$satz_bar['beschreibung']."</td><td><input type='submit' value='Storno'></td></tr>";
					echo "</form>";
				}
			If (empty($umsatz_bar)) {
				$gesamt_umsatz_bar = 0;
			}
			else {
				$gesamt_umsatz_bar = array_sum($umsatz_bar);
			}
					echo '<tr class ="fett"><td colspan="3">'.$datumBarNeu.' Bar Summe: </td><td>'.sprintf("%.2f", $gesamt_umsatz_bar).'&nbsp;€</td></tr><tr class="trenner"> </tr>';
					
					//Ausgabe Tabelle Einnahmen mit Gutschein
	If (!empty($einnahme_gs)) {
					echo '<tr><th class ="th_bar">Einnahmen</th><th class ="gutschein_back"> </th><th class="th_bar" colspann="2">Gutschein</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
					
			foreach($einnahme_gs AS $satz_bar) {

				$umsatz_gs[] = $satz_bar['preis'];
			
			
					echo '<form action="#" method="post">';
					echo '<input type="hidden" name="del_bar_id" value="gs_loeschen">'; 	//Stornieren beginnen
					echo '<input type="hidden" name="id" value="'.$satz_bar['id'].'">';		// ID aus Barverkauf
					echo '<input type="hidden" name="del_gutscheinnr" value="'.$satz_bar['gutscheinnr'].'">'; // Gutscheinnummer
					echo '<input type="hidden" name="preis" value="'.$satz_bar['preis'].'">';
					echo '<input type="hidden" name="artikel" value="'.$satz_bar['artikel'].'">';
					echo '<input type="hidden" name="wert" value="Gs_Ein_Storno">';
					echo '<input type="hidden" name="klasse" value="storno_gs_wa">';
			If ($satz_bar['artikel'] == "Gutschein") {	// Preis Gutscheintausch nicht Mitrechnen
					echo "<tr class = 'gutscheintausch'><td>".$datumBarNeu."</td><td>".$satz_bar['artikel']."</td><td>".$satz_bar['gutscheinnr']."</td><td>".$satz_bar['preis']."&nbsp;€</td><td>".$satz_bar['beschreibung']."</td><td><input type='submit' value='Storno'></td></tr>";
					echo "</form>";
				}
			else {
					echo "<tr><td>".$datumBarNeu."</td><td>".$satz_bar['artikel']."</td><td>".$satz_bar['gutscheinnr']."</td><td>".$satz_bar['preis']."&nbsp;€</td><td>".$satz_bar['beschreibung']."</td><td><input type='submit' value='Storno'></td></tr>";
					echo "</form>";
				}
			}
				
				$gesamt_umsatz_gs = array_sum($umsatz_gs);
			
					echo '<tr class ="fett"><td colspan="3">'.$datumBarNeu.' Gutschein Summe: </td><td>'.sprintf("%.2f", $gesamt_umsatz_gs).'&nbsp;€</td></tr><tr class="trenner"> </tr>';
	}
	
					//Ausgabe Tabelle Einnahmen per Überweisung
		If (!empty($einnahme_uew)) {
					echo '<tr><th class ="th_bar">Einnahmen</th><th class ="ec"> </th><th class="th_bar" colspann="2">Überweisung</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr</th><th>Preis</th><th>Info</th></tr>';
					
			foreach($einnahme_uew AS $satz_bar) {
				$umsatz_uew[] = $satz_bar['preis'];
			
					echo '<form action="#" method="post">';
					echo '<input type="hidden" name="del_bar_id" value="bar_loeschen">'; 	//Stornieren beginnen
					echo '<input type="hidden" name="id" value="'.$satz_bar['id'].'">';		// ID aus Barverkauf
					echo '<input type="hidden" name="del_gutscheinnr" value="'.$satz_bar['gutscheinnr'].'">'; // Gutscheinnummer
					echo '<input type="hidden" name="artikel" value="'.$satz_bar['artikel'].'">';
					echo '<input type="hidden" name="wert" value="Uew_Ein_Storno">';
					echo '<input type="hidden" name="klasse" value="storno">';
					echo "<tr><td>".$datumBarNeu."</td><td>".$satz_bar['artikel']."</td><td>".$satz_bar['gutscheinnr']."</td><td>".$satz_bar['preis']."&nbsp;€</td><td>".$satz_bar['beschreibung']."</td><td><input type='submit' value='Storno'></td></tr>";
					echo "</form>";
				}
				
				$gesamt_umsatz_uew = array_sum($umsatz_uew);
			
					echo '<tr class ="fett"><td colspan="3">'.$datumBarNeu.' Überweisung Summe: </td><td>'.sprintf("%.2f", $gesamt_umsatz_uew).'&nbsp;€</td></tr></table>';
		}
		else {
					echo '</table>';
		}
				
	}
	
			// Ausgabe Tabelle Massagen mit Gutschein und Überweisung
			
				// Abfrage Massage mit Gutschein
			$stmt_massage_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND wert = ? AND klasse = ? ORDER BY id");
			$stmt_massage_gs->execute(array($tagesid, "GS Einlösen", "gs"));
			$massage_gs = $stmt_massage_gs->fetchAll(PDO::FETCH_ASSOC);
	
				// Abfrage Massage mit Überweisung
			$stmt_massage_uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND wert = ? AND klasse = ? ORDER BY id");
			$stmt_massage_uew->execute(array($tagesid, "Massage", "uew_MA"));
			$massage_uew = $stmt_massage_uew->fetchAll(PDO::FETCH_ASSOC);
			
	function getMassage() {
			global $massage_gs;
			global $massage_uew;
			global $datumBarNeu;
		
								//Ausgabe Tabelle Massagen mit Gutschein
								
					echo '<table class="massagen">';
		If (!empty($massage_gs)) {
					echo '<tr><th class ="th_mas">Massagen</th><th class ="gutschein_back"> </th><th class="th_mas" colspann="2">Gutschein</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
					
			foreach($massage_gs AS $satz_bar) {
				$umsatz_gs[] = $satz_bar['preis'];
			
					echo '<form action="#" method="post">';
					echo '<input type="hidden" name="del_bar_id" value="gs_loeschen">'; 	//Stornieren beginnen
					echo '<input type="hidden" name="id" value="'.$satz_bar['id'].'">';		// ID aus Barverkauf
					echo '<input type="hidden" name="del_gutscheinnr" value="'.$satz_bar['gutscheinnr'].'">'; // Gutscheinnummer
					echo '<input type="hidden" name="preis" value="'.$satz_bar['preis'].'">';
					echo '<input type="hidden" name="artikel" value="'.$satz_bar['artikel'].'">';
					echo '<input type="hidden" name="wert" value="Gs_Ein_Storno">';
					echo '<input type="hidden" name="klasse" value="storno_gs">';
					echo '<tr><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['gutscheinnr'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td><td><input type="submit" value="Storno"></td></tr>';
					echo "</form>";
				}
				
				$gesamt_umsatz_gs = array_sum($umsatz_gs);
			
					echo '<tr class ="fett"><td colspan="3">'.$datumBarNeu.' Massagen mit Gutschein Summe: </td><td>'.sprintf("%.2f", $gesamt_umsatz_gs).'&nbsp;€</td></tr><tr class="trenner"> </tr>';
		}
					
							//Ausgabe Tabelle Massagen mit Überweisung
		If (!empty($massage_uew)) {
					echo '<tr><th class ="th_mas">Massagen</th><th class ="ec"> </th><th class="th_mas" colspann="2">Überweisung</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Preis</th><th>Info</th></tr>';
					
			foreach($massage_uew AS $satz_bar) {
				$umsatz_uew[] = $satz_bar['preis'];
			
					echo '<form action="#" method="post">';
					echo '<input type="hidden" name="del_bar_id" value="bar_loeschen">'; 	//Stornieren beginnen
					echo '<input type="hidden" name="id" value="'.$satz_bar['id'].'">';		// ID aus Barverkauf
					echo '<input type="hidden" name="del_gutscheinnr" value="'.$satz_bar['gutscheinnr'].'">'; // Gutscheinnummer
					echo '<input type="hidden" name="artikel" value="'.$satz_bar['artikel'].'">';
					echo '<input type="hidden" name="wert" value="Uew_Massage_Storno">';
					echo '<input type="hidden" name="klasse" value="storno">';
					echo '<tr><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td><td><input type="submit" value="Storno"></td></tr>';
					echo "</form>";
				}
				
				$gesamt_umsatz_uew = array_sum($umsatz_uew);
			
					echo '<tr class ="fett"><td colspan="2">'.$datumBarNeu.' Massagen mit Überweisung Summe: </td><td>'.sprintf("%.2f", $gesamt_umsatz_uew).'&nbsp;€</td></tr></table>';
		}
		else {
					echo '</table>';
		}
	}
		
			// Tabellenausgabe Ausgaben
			
				// Abfrage Ausgaben
			$stmt_ausgaben = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ? OR wert = ?) AND klasse = ? ORDER BY id");
			$stmt_ausgaben->execute(array($tagesid, "Ausgabe", "Ausgabe -%", "Ausgabe 0%", ""));
			$ausgaben = $stmt_ausgaben->fetchAll(PDO::FETCH_ASSOC);
			
	function getAusgaben() {
		global $ausgaben;
		global $datumBarNeu;
		
					//Ausgabe Tabelle Ausgaben
		echo '<table class ="barverkauf">
		<tr><th class ="th_aus">Ausgaben</th><th class ="bar"> </th><th class="th_aus" colspann="2">Bar</th></tr>
		<tr><th>Datum</th><th>Artikel</th><th>Beleg Nr.</th><th>Preis</th><th>Info</th></tr>';

			foreach($ausgaben AS $satz_bar) {
				$umsatz_bar[] = $satz_bar['preis'];
			
					echo '<form action="#" method="post">';
					echo '<input type="hidden" name="del_bar_id" value="bar_loeschen">'; 	//Stornieren beginnen
					echo '<input type="hidden" name="id" value="'.$satz_bar['id'].'">';		// ID aus Barverkauf
					echo '<input type="hidden" name="del_gutscheinnr" value="'.$satz_bar['gutscheinnr'].'">';
					echo '<input type="hidden" name="artikel" value="'.$satz_bar['artikel'].'">';
					echo '<input type="hidden" name="wert" value="Bar_Aus_Storno">';
					echo '<input type="hidden" name="klasse" value="storno">';
					echo "<tr><td>".$datumBarNeu."</td><td>".$satz_bar['artikel']."</td><td>".$satz_bar['belegnr']."</td><td>".$satz_bar['preis']."&nbsp;€</td><td>".$satz_bar['beschreibung']."</td><td><input type='submit' value='Storno'></td></tr>";
					echo "</form>";
				}
			If (empty($umsatz_bar)) {
				$gesamt_umsatz_bar = 0;
			}
			else {
				$gesamt_umsatz_bar = array_sum($umsatz_bar);
			}
					echo '<tr class ="fett"><td colspan="3">'.$datumBarNeu.' Ausgaben Summe: </td><td>'.sprintf("%.2f", $gesamt_umsatz_bar).'&nbsp;€</td></tr></table>';
	}		// Ausgaben Tabelle Ende
	
			//Tabelle Stornierungen in Barverkauf / Massagen / Ausgaben
			
					// Abfrage Storno Verkauf Bar
			$stmt_storno_verkauf_bar = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND	wert = ? AND klasse = ? ORDER BY id");
			$stmt_storno_verkauf_bar->execute(array($tagesid, "Bar_Ein_Storno", "storno"));
			$storno_verkauf_bar = $stmt_storno_verkauf_bar->fetchAll(PDO::FETCH_ASSOC);
			
					// Abfrage Storno Verkauf Gutschein
			$stmt_storno_verkauf_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND	wert = ? AND klasse = ? ORDER BY id");
			$stmt_storno_verkauf_gs->execute(array($tagesid, "Gs_Ein_Storno", "storno_gs_wa"));
			$storno_verkauf_gs = $stmt_storno_verkauf_gs->fetchAll(PDO::FETCH_ASSOC);
			
					// Abfrage Storno Verkauf UEW
			$stmt_storno_verkauf_uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND	wert = ? AND klasse = ? ORDER BY id");
			$stmt_storno_verkauf_uew->execute(array($tagesid, "Uew_Ein_Storno", "storno"));
			$storno_verkauf_uew = $stmt_storno_verkauf_uew->fetchAll(PDO::FETCH_ASSOC);

					// Abfrage Storno Massagen Gutschein
			$stmt_storno_massagen_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE (tagesid = ? AND	wert = ? AND klasse = ?) OR (tagesid = ? AND	wert = ? AND klasse = ?) ORDER BY id");
			$stmt_storno_massagen_gs->execute(array($tagesid, "Gs_Ein_Storno", "storno_gs", $tagesid, "Gs_Ein", "storno_gs"));
			$storno_massagen_gs = $stmt_storno_massagen_gs->fetchAll(PDO::FETCH_ASSOC);
			
					// Abfrage Storno Massagen UEW
			$stmt_storno_massagen_uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND	wert = ? AND klasse = ? ORDER BY id");
			$stmt_storno_massagen_uew->execute(array($tagesid, "Uew_Massage_Storno", "storno"));
			$storno_massagen_uew = $stmt_storno_massagen_uew->fetchAll(PDO::FETCH_ASSOC);
			
					// Abfrage Storno Ausgaben
			$stmt_storno_ausgaben = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND	wert = ? AND klasse = ? ORDER BY id");
			$stmt_storno_ausgaben->execute(array($tagesid, "Bar_Aus_Storno", "storno"));
			$storno_ausgaben = $stmt_storno_ausgaben->fetchAll(PDO::FETCH_ASSOC);
			
	function getStorno() {
		global $storno_verkauf_bar;
		global $storno_verkauf_gs;
		global $storno_verkauf_uew;
		global $storno_massagen_gs;
		global $storno_massagen_uew;
		global $storno_ausgaben;
		global $datumBarNeu;
		
	If (!empty($storno_verkauf_bar OR $storno_verkauf_gs OR $storno_verkauf_uew OR $storno_massagen_gs OR $storno_massagen_uew OR $storno_ausgaben)) {
		echo '<table class ="barverkauf">';
										//Ausgabe Tabelle Verkauf Stornierungen
		If (!empty($storno_verkauf_bar)) {
				echo '<tr class="storno"><th class ="th_bar">Einnahmen</th><th class ="bar_1"> </th><th colspann="2">Verkauf Bar</th><th colspann="2" class ="th_1">Storno</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
					
			foreach($storno_verkauf_bar AS $satz_bar) {
				echo '<tr class="storno"><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['gutscheinnr'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td></tr>';
			}
		}
		
		If (!empty($storno_verkauf_gs)) {
				echo '<tr class="storno"><th class ="th_bar">Einnahmen</th><th class ="gutschein_back_1"> </th><th colspann="2">Verkauf Gutschein</th><th colspann="2" class ="th_1">Storno</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
					
			foreach($storno_verkauf_gs AS $satz_bar) {
				echo '<tr class="storno"><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['gutscheinnr'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td></tr>';
			}
		}

		If (!empty($storno_verkauf_uew)) {	
				echo '<tr class="storno"><th class ="th_bar">Einnahmen</th><th class ="ec_1"> </th><th colspann="2">Verkauf Überweisung</th><th colspann="2" class ="th_1">Storno</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
			foreach($storno_verkauf_uew AS $satz_bar) {
				echo '<tr class="storno"><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['gutscheinnr'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td></tr>';
			}
		}
									// Ausgabe Tabelle Massagen Storno
		If (!empty($storno_massagen_gs)) {	
				echo '<tr class="storno"><th class ="th_mas">Massagen</th><th class ="gutschein_back_1"> </th><th colspann="2">Massagen mit Gutschein</th><th colspann="2" class ="th_1">Storno</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
			foreach($storno_massagen_gs AS $satz_bar) {
				echo '<tr class="storno"><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['gutscheinnr'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td></tr>';
			}
		}
		
		If (!empty($storno_massagen_uew)) {	
				echo '<tr class="storno"><th class ="th_mas">Massagen</th><th class ="ec_1"> </th><th colspann="2">Massagen per Überweisung</th><th colspann="2" class ="th_1">Storno</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
			foreach($storno_massagen_uew AS $satz_bar) {
				echo '<tr class="storno"><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['gutscheinnr'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td></tr>';
			}
		}
			
								//Ausgabe Tabelle Ausgaben Storno
		If (!empty($storno_ausgaben)) {	
				echo '<tr class="storno"><th class ="th_aus">Ausgaben</th><th class ="bar_1"> </th><th colspann="2"> </th><th colspann="2" class ="th_1">Storno</th></tr>
					<tr><th>Datum</th><th>Artikel</th><th>Gutschein Nr.</th><th>Preis</th><th>Info</th></tr>';
			foreach($storno_ausgaben AS $satz_bar) {
				echo '<tr class="storno"><td>'.$datumBarNeu.'</td><td>'.$satz_bar['artikel'].'</td><td>'.$satz_bar['gutscheinnr'].'</td><td>'.$satz_bar['preis'].'&nbsp;€</td><td>'.$satz_bar['beschreibung'].'</td></tr>';
			}
		}
		echo '</table>';
	}
	}
	
		
		
		
		
		
		
		
		
		
		
		
	

?>