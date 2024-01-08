<?php

		include "../inc/dbNew.php";

		
			//Fortlaufende ID's aus Start,- und End-Datum Erstellen
		$umVon = new DateTime($_POST['Um_von']);
		$umBis = new DateTime($_POST['Um_bis']);
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($umVon, $interval, $umBis);
		foreach ($period as $dt) {
			$abfrage_ID = $dt->format("ymd");
			$abfrage_IDS[] = $abfrage_ID;
		}
		
		$titel = 'KB '.$umVon->format("d.m.Y").' bis '.$umBis->format("d.m.Y");
		
		//Abfrage Kassenstart
	$stmt_kb_kassenstart = $dbNew->prepare("SELECT * FROM kassenstand WHERE tagesid = ?"); 
		
		//Abfrage Massagen aus Buchungen
	$stmt_massage_kb = $dbNew->prepare("SELECT * FROM buchungen WHERE id LIKE ?");
		
		//Abfrage Massagen mit Gutschein bezahlt
	$stmt_massage_kb_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ?) AND (klasse = ? OR klasse = ?)");
	
		//Abfrage Massagen per Überweisung bezahlt
	$stmt_massage_kb_uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ?) AND (klasse = ? OR klasse = ?) ");
	
		//Abfrage Verkauf Bar
	$stmt_verkauf_kb_bar = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ? OR wert = ?) AND (klasse = ? OR klasse = ?)");
	
		//Abfrage Verkauf Gutschein
	$stmt_verkauf_kb_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ? OR wert = ?) AND (klasse = ? OR klasse = ?)");
	
		//Abfrage Verkauf Überweisung
	$stmt_verkauf_kb_uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ? OR wert = ?) AND (klasse = ? OR klasse = ?)");
	
		//Abfrage Ausgaben 
	$stmt_ausgaben_kb = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ? OR wert = ? OR wert = ?)");
	

	$kb_all_day = '';
	$kb_ma_pdf_all = '';
	$ma_gs_all = '';
	$ma_uew_all = '';
	$verk_gs_all = '';
	$verk_uew_all = '';
	$ausgaben_all = '';
	
	
function getKassenbuch() {
	global $abfrage_IDS;
	global $stmt_kb_kassenstart;
	global $stmt_massage_kb;
	global $stmt_massage_kb_gs;
	global $stmt_massage_kb_uew;
	global $stmt_verkauf_kb_bar;
	global $stmt_verkauf_kb_gs;
	global $stmt_verkauf_kb_uew;
	global $stmt_ausgaben_kb;
	global $umVon;
	global $umBis;
	global $kb_all_day;
	global $kb_ma_pdf_all;
	global $ma_gs_all;
	global $ma_uew_all;
	global $verk_bar_all;
	global $verk_gs_all;
	global $verk_uew_all;
	global $ausgaben_all;
	
	echo '<tr><th colspan ="4"> Kassenbuch vom '.$umVon->format('d.m.Y').' - '.$umBis->format('d.m.Y').'</th></tr>';
	
				//Variable für PDF Ausgabe yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$hd = '<tr><th colspan ="4"> Kassenbuch vom '.$umVon->format('d.m.Y').' - '.$umBis->format('d.m.Y').'</th></tr>';
	
	foreach($abfrage_IDS AS $tagesid) {	
		$jahr = "20".substr($tagesid,-6,2);
		$mo = substr($tagesid,-4,2);
		$day = substr($tagesid,-2,2);
			echo '<tr><th class="th_1" colspan="4">Kassenbuch am '.$day.'.'.$mo.'.'.$jahr.'</th></tr>';
			
				//Variable für PDF Ausgabe yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$kb_day = '<tr><th class="th_1" colspan="4">Kassenbuch am '.$day.'.'.$mo.'.'.$jahr.'</th></tr>';
			
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Alle Massagen ermitteln und Ausgeben
			$suchVar = $tagesid."%";
		$stmt_massage_kb->execute(array($suchVar));
		$massage_kb = $stmt_massage_kb->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($massage_kb)) {
		echo '<tr><th colspan ="4">Massagen Einnahmen</th></tr><tr><th>Massageart</th><th>Preis</th><th>Dauer</th><th>Uhrzeit / Raum / Name</th></tr>';
		
				//Variable für Überschrift 1 PDF Ausgabe yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$hd_ma = '<tr class="th_2"><th colspan ="4">&nbsp;&nbsp;Massagen Einnahmen</th></tr><tr><th style="width: 30%;">Massageart</th><th style="width: 10%;">Preis</th><th style="width: 10%;">Dauer</th><th style="width: 50%;">Uhrzeit / Raum / Name</th></tr>';
	
			foreach($massage_kb AS $mkb) {
				$raum = substr($mkb['id'],-5,1);
				$stunde = substr($mkb['id'],-4,2);
				$minute = substr($mkb['id'],-2,2);
			$summeMassage[] = $mkb['Preis'];
			echo '<tr><td>'.$mkb['massageart'].'</td><td>'.$mkb['Preis'].'&nbsp;€</td><td>'.$mkb['dauer'].' min.</td><td>'.$stunde.':'.$minute.' Uhr / '.$raum.' / '.$mkb['vorname'].' '.$mkb['nachname'].'</td></tr>';
			
				//Variable für Einträge PDF Ausgabe yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$kb_ma_pdf = '<tr><td>'.$mkb['massageart'].'</td><td>'.$mkb['Preis'].'&nbsp;€</td><td>'.$mkb['dauer'].' min.</td><td>'.$stunde.':'.$minute.' Uhr / '.$raum.' / '.$mkb['vorname'].' '.$mkb['nachname'].'</td></tr>';	
	
	$kb_ma_pdf_all .= $kb_ma_pdf;
			}
			$AsummeMassage = array_sum($summeMassage);
			$summeMassage = array();
			echo '<tr><th class="trenner_summe">Summe</th><th class="trenner_summe">'.number_format($AsummeMassage, 2, ",", ".").'&nbsp;€</th><th class="trenner_summe" colspan="2"></th></tr>';
			
				//Variable für PDF Ausgabe yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$kb_Sma_pdf = '<tr><th class="trenner_summe">Summe</th><th class="trenner_summe">'.number_format($AsummeMassage, 2, ",", ".").'&nbsp;€</th><th class="trenner_summe" colspan="2"></th></tr>';
			
			
		}
		else {
			$AsummeMassage = 0;
			$hd_ma = '';
			$kb_ma_all = '';
			$kb_Sma_pdf = '';
		}
		
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Massagen mit Gutschein ermitteln und Ausgeben
		$stmt_massage_kb_gs->execute(array($tagesid, "GS Einlösen", "Gs_Ein_Storno", "gs", "storno_gs"));
		$massage_kb_gs = $stmt_massage_kb_gs->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($massage_kb_gs)) {
			$summe_massage_kb_gs[] = 0;			//Variable Einführen um Fehler bei leer (nur Storno) im ersten Lauf zu verhindern
			echo '<tr><th colspan ="4">Davon Massagen mit Gutschein bezahlt</th></tr>
			<tr><th>Massageart</th><th>Preis</th><th>Gutschein Nr.</th><th>Zeit / Raum / Name</th></tr>';
			
					//Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyy
	$hd_ma_gs = '<tr class="th_2"><th colspan ="4">&nbsp;&nbsp;Davon Massagen mit Gutschein bezahlt</th></tr>
			<tr><th>Massageart</th><th>Preis</th><th>Gutschein Nr.</th><th>Zeit / Raum / Name</th></tr>';
			
			foreach($massage_kb_gs AS $mkbgs) {
				$weg = "<br />";
				$rein = " / ";
				$info = str_replace($weg, $rein, $mkbgs['beschreibung']);
				If ($mkbgs['klasse'] == "storno_gs") {
			echo '<tr class="storno"><td>'.$mkbgs['artikel'].'</td><td>'.$mkbgs['preis'].'&nbsp;€</td><td>'.$mkbgs['gutscheinnr'].'</td><td>'.$info.'</td></tr>';
			
					// Variable für PDF yyyyyyyyyyyyyyyyyyyyyy
	$ma_gs = '<tr class="storno"><td>'.$mkbgs['artikel'].'</td><td>'.$mkbgs['preis'].'&nbsp;€</td><td>'.$mkbgs['gutscheinnr'].'</td><td>'.$info.'</td></tr>';
	
				}
				else {
				$summe_massage_kb_gs[] = $mkbgs['preis'];
			echo '<tr><td>'.$mkbgs['artikel'].'</td><td>'.$mkbgs['preis'].'&nbsp;€</td><td>'.$mkbgs['gutscheinnr'].'</td><td>'.$info.'</td></tr>';
			
					// Variable für PDF yyyyyyyyyyyyyyyyyyyyyy
	$ma_gs = '<tr><td>'.$mkbgs['artikel'].'</td><td>'.$mkbgs['preis'].'&nbsp;€</td><td>'.$mkbgs['gutscheinnr'].'</td><td>'.$info.'</td></tr>';
				}
	$ma_gs_all .= $ma_gs;
	
			}
			$Asumme_massage_kb_gs = array_sum($summe_massage_kb_gs);
			$summe_massage_kb_gs = array();
			echo '<tr><th class="trenner_summe">Summe</th><th class="trenner_summe">'.number_format($Asumme_massage_kb_gs, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
			
					// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyy
	$Sma_gs = '<tr><th class="trenner_summe">Summe</th><th class="trenner_summe">'.number_format($Asumme_massage_kb_gs, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
	
		}
		else {
			$Asumme_massage_kb_gs = 0;
			$hd_ma_gs = '';
			$ma_gs_all = '';
			$Sma_gs = '';
		}
		
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Massagen mit Überweisung ermitteln und Ausgeben
		$stmt_massage_kb_uew->execute(array($tagesid, "Massage", "Uew_Massage_Storno", "uew_Ma", "storno"));
		$massage_kb_uew = $stmt_massage_kb_uew->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($massage_kb_uew)) {
			$summe_massage_kb_uew[] = 0;		//Variable Einführen um Fehler bei leer im ersten Lauf zu verhindern
				echo '<tr><th colspan ="4">Davon Massagen per Überweisung bezahlt</th></tr>
				<tr><th>Massageart</th><th>Preis</th><th></th><th>Zeit / Raum / Name</th></tr>';
				
					// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$hd_ma_uew = '<tr class="th_2"><th colspan ="4">&nbsp;&nbsp;Davon Massagen per Überweisung bezahlt</th></tr>
				<tr><th>Massageart</th><th>Preis</th><th></th><th>Zeit / Raum / Name</th></tr>';
				
			foreach($massage_kb_uew AS $mkbuew) {
				$weg_uew = "<br />";
				$rein_uew = " / ";
				$info_uew = str_replace($weg_uew, $rein_uew, $mkbuew['beschreibung']);
				If ($mkbuew['klasse'] == "storno") {
			echo '<tr class="storno"><td>'.$mkbuew['artikel'].'</td><td>'.$mkbuew['preis'].'&nbsp;€</td><td>'.$mkbuew['gutscheinnr'].'</td><td>'.$info_uew.'</td></tr>';
			
					// Variable für PDF yyyyyyyyyyyyyyyy
	$ma_uew = '<tr class="storno"><td>'.$mkbuew['artikel'].'</td><td>'.$mkbuew['preis'].'&nbsp;€</td><td>'.$mkbuew['gutscheinnr'].'</td><td>'.$info_uew.'</td></tr>';
				}
				else {
				$summe_massage_kb_uew[] = $mkbuew['preis'];
			echo '<tr><td>'.$mkbuew['artikel'].'</td><td>'.$mkbuew['preis'].'&nbsp;€</td><td>'.$mkbuew['gutscheinnr'].'</td><td>'.$info_uew.'</td></tr>';
			
					// Variable für PDF yyyyyyyyyyyyyyyy
	$ma_uew = '<tr><td>'.$mkbuew['artikel'].'</td><td>'.$mkbuew['preis'].'&nbsp;€</td><td>'.$mkbuew['gutscheinnr'].'</td><td>'.$info_uew.'</td></tr>';
				}
	$ma_uew_all .= $ma_uew;
			}
			$Asumme_massage_kb_uew = array_sum($summe_massage_kb_uew);
			$summe_massage_kb_uew = array();
			echo '<tr><th class="trenner_summe">Summe</th><th class="trenner_summe">'.number_format($Asumme_massage_kb_uew, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
			
					// Variablen für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyy

	$Sma_uew = '<tr><th class="trenner_summe">Summe</th><th class="trenner_summe">'.number_format($Asumme_massage_kb_uew, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
		}
		else {
			$Asumme_massage_kb_uew = 0;
			$hd_ma_uew = '';
			$ma_uew_all = '';
			$Sma_uew = '';
		}
			$massageBar = $AsummeMassage-$Asumme_massage_kb_gs-$Asumme_massage_kb_uew;
				
		If ($massageBar != 0) {
			echo '<tr><th class="trenner_summe" colspan ="2">Barsumme aus Massagen</th><th class="trenner_summe">'.number_format($massageBar, 2, ",", ".").' €</th><th class="trenner_summe"></th></tr>';
			
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyy
	$Sbar_ma = '<tr><th class="trenner_summe" colspan ="2">Barsumme aus Massagen</th><th class="trenner_summe">'.number_format($massageBar, 2, ",", ".").' €</th><th class="trenner_summe"></th></tr>';
		}
		else {
			$Sbar_ma = '';
		}
		
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxVerkäufe in Bar ermitteln und Ausgeben
		$stmt_verkauf_kb_bar->execute(array($tagesid, "Einnahme", "Einnahme -%", "Bar_Ein_Storno", "", "storno"));
		$verkauf_kb_bar  = $stmt_verkauf_kb_bar->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($verkauf_kb_bar)) {
			$summe_verkauf_bar[] = 0;		//Variable Einführen um Fehler bei leer (nur Storno) im ersten Lauf zu verhindern
				echo '<tr><th colspan ="4">Verkäufe Bar</th></tr>
				<tr><th>Artikel</th><th>Preis</th><th>Gutschein Nr.</th><th>Info</th></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$hd_verk_bar = '<tr class="th_2"><th colspan ="4">&nbsp;&nbsp;Verkäufe Bar</th></tr>
				<tr><th>Artikel</th><th>Preis</th><th>Gutschein Nr.</th><th>Info</th></tr>';
				
			foreach ($verkauf_kb_bar AS $vkb) {
			If ($vkb['klasse'] == "storno") {
				echo '<tr class="storno"><td>'.$vkb['artikel'].'</td><td>'.$vkb['preis'].'&nbsp;€</td><td>'.$vkb['gutscheinnr'].'</td><td>'.$vkb['beschreibung'].'</td></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$verk_bar = '<tr class="storno"><td>'.$vkb['artikel'].'</td><td>'.$vkb['preis'].'&nbsp;€</td><td>'.$vkb['gutscheinnr'].'</td><td>'.$vkb['beschreibung'].'</td></tr>';
				
			}
			else { 
				$summe_verkauf_bar[] = $vkb['preis'];
			If ($vkb['wert'] == "Einnahme -%") {
				echo '<tr class="ein_minus"><td>'.$vkb['artikel'].'</td><td>'.$vkb['preis'].'&nbsp;€</td><td>'.$vkb['gutscheinnr'].'</td><td>'.$vkb['beschreibung'].'</td></tr>';
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy 
	$verk_bar = '<tr class="ein_minus"><td>'.$vkb['artikel'].'</td><td>'.$vkb['preis'].'&nbsp;€</td><td>'.$vkb['gutscheinnr'].'</td><td>'.$vkb['beschreibung'].'</td></tr>';
			}
			else {
				echo '<tr><td>'.$vkb['artikel'].'</td><td>'.$vkb['preis'].'&nbsp;€</td><td>'.$vkb['gutscheinnr'].'</td><td>'.$vkb['beschreibung'].'</td></tr>';
				
				//Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$verk_bar = '<tr><td>'.$vkb['artikel'].'</td><td>'.$vkb['preis'].'&nbsp;€</td><td>'.$vkb['gutscheinnr'].'</td><td>'.$vkb['beschreibung'].'</td></tr>';
			}
			}
	$verk_bar_all .= $verk_bar;
			}
			$Asumme_verkauf_bar = array_sum($summe_verkauf_bar);
			$summe_verkauf_bar = array();
				echo '<tr><th class="trenner_summe">Barsumme aus Verkauf</th><th class="trenner_summe">'.number_format($Asumme_verkauf_bar, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
				
				//Variable für PDF
	$Sverk_bar = '<tr><th class="trenner_summe">Barsumme aus Verkauf</th><th class="trenner_summe">'.number_format($Asumme_verkauf_bar, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
		}
		else {
			$Asumme_verkauf_bar = 0;
			$hd_verk_bar = '';
			$verl_bar_all = '';
			$Sverk_bar = '';
		}
		
		
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxVerkäufe mit Gutschein ermitteln und Ausgeben
		$stmt_verkauf_kb_gs->execute(array($tagesid, "GS Einlösen", "GS Einlösen -%", "Gs_Ein_Storno", "gs_wa", "storno_gs_wa"));
		$verkauf_kb_gs = $stmt_verkauf_kb_gs->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($verkauf_kb_gs)) {
		$summe_verkauf_gsT[] = 0;		//Variable Sammeln Gutscheintausch, wird bei Gesamtsumme abgezogen
		$summe_verkauf_gs[] = 0;		//Variablen Einführen um Fehler bei leer (nur Storno) im ersten Lauf zu verhindern
			echo '<tr><th colspan ="4">Verkäufe mit Gutschein</th></tr>
			<tr><th>Artikel</th><th>Preis</th><th>Gutschein Nr.</th><th>Info</th></tr>';
			
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$hd_verk_gs = '<tr class="th_2"><th colspan ="4">&nbsp;&nbsp;Verkäufe mit Gutschein</th></tr>
			<tr><th>Artikel</th><th>Preis</th><th>Gutschein Nr.</th><th>Info</th></tr>';
			
		foreach ($verkauf_kb_gs AS $vkbgs) {
			If ($vkbgs['klasse'] == "storno_gs_wa") {
				echo '<tr class="storno"><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$verk_gs = '<tr class="storno"><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
	
			}
			else {
				If ($vkbgs['wert'] == "GS Einlösen -%") {
				$summe_verkauf_gs[] = $vkbgs['preis'];
				echo '<tr class="ein_minus"><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy 
	$verk_gs = '<tr class="ein_minus"><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
				}
				elseif ($vkbgs['artikel'] == "Gutschein" AND $vkbgs['wert'] == "GS Einlösen") {
				$summe_verkauf_gsT[] = $vkbgs['preis'];
				echo '<tr class="gutscheintausch"><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy				
	$verk_gs = '<tr class="gutscheintausch"><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
				}
				else {
				$summe_verkauf_gs[] = $vkbgs['preis'];
				echo '<tr><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy				
	$verk_gs = '<tr><td>'.$vkbgs['artikel'].'</td><td>'.$vkbgs['preis'].'&nbsp;€</td><td>'.$vkbgs['gutscheinnr'].'</td><td>'.$vkbgs['beschreibung'].'</td></tr>';
				}
				}
	$verk_gs_all .= $verk_gs;
			}

			
			$Asumme_verkauf_gsT = array_sum($summe_verkauf_gsT);		//Summe Gutscheintausch
			$Asumme_verkauf_gs = array_sum($summe_verkauf_gs);//+array_sum($summe_verkauf_gsT);
			$summe_verkauf_gsT = array();
			$summe_verkauf_gs = array();
			If ($Asumme_verkauf_gsT > 0) {
				echo '<tr class="gutscheintausch"><th class="trenner_summe">Summe Gutschein Getauscht</th><th class="trenner_summe">'.number_format($Asumme_verkauf_gsT, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>
				<tr><th class="trenner_summe">Summe aus Verkauf mit Gutschein</th><th class="trenner_summe">'.number_format($Asumme_verkauf_gs, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$Sverk_gs = '<tr class="gutscheintausch"><th class="trenner_summe">Summe Gutschein Getauscht</th><th class="trenner_summe">'.number_format($Asumme_verkauf_gsT, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>
	<tr><th class="trenner_summe">Summe aus Verkauf mit Gutschein</th><th class="trenner_summe">'.number_format($Asumme_verkauf_gs, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
			}
			else {
				echo '<tr><th class="trenner_summe">Summe aus Verkauf mit Gutschein</th><th class="trenner_summe">'.number_format($Asumme_verkauf_gs, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
				
								// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$Sverk_gs = '<tr><th class="trenner_summe">Summe aus Verkauf mit Gutschein</th><th class="trenner_summe">'.number_format($Asumme_verkauf_gs, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
			}
				
		}
		else {
			$Asumme_verkauf_gsT = 0;
			$Asumme_verkauf_gs = 0;
			$hd_verk_gs = '';
			$verk_gs_all = '';
			$Sverk_gs = '';
		}
		


//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxVerkäufe mit Überweisung ermitteln und Ausgeben
		$stmt_verkauf_kb_uew->execute(array($tagesid, "Einnahme", "Einnahme -%", "UEW_Ein_Storno", "uew", "storno"));
		$verkauf_kb_uew = $stmt_verkauf_kb_uew->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($verkauf_kb_uew)) {
		$summe_verkauf_uew[] = 0;		//Variable Einführen um Fehler bei leer (nur Storno) im ersten Lauf zu verhindern
			echo '<tr><th colspan ="4">Verkäufe per Überweisung</th></tr>
			<tr><th>Artikel</th><th>Preis</th><th>Gutschein Nr.</th><th>Info</th></tr>';
			
				// Variable für PDF yyyyyyyyyyyyyyyyy
	$hd_verk_uew = '<tr class="th_2"><th colspan ="4">&nbsp;&nbsp;Verkäufe per Überweisung</th></tr>
			<tr><th>Artikel</th><th>Preis</th><th>Gutschein Nr.</th><th>Info</th></tr>';
			
			foreach ($verkauf_kb_uew AS $vkbuew) {
			If ($vkbuew['klasse'] == "storno") {
				echo '<tr class="storno"><td>'.$vkbuew['artikel'].'</td><td>'.$vkbuew['preis'].'&nbsp;€</td><td>'.$vkbuew['gutscheinnr'].'</td><td>'.$vkbuew['beschreibung'].'</td></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyy
	$verk_uew = '<tr class="storno"><td>'.$vkbuew['artikel'].'</td><td>'.$vkbuew['preis'].'&nbsp;€</td><td>'.$vkbuew['gutscheinnr'].'</td><td>'.$vkbuew['beschreibung'].'</td></tr>';
				
			}
			else {
				$summe_verkauf_uew[] = $vkbuew['preis'];
				
				If ($vkbuew['wert'] == "Einnahme -%") {
				echo '<tr class="ein_minus"><td>'.$vkbuew['artikel'].'</td><td>'.$vkbuew['preis'].'&nbsp;€</td><td>'.$vkbuew['gutscheinnr'].'</td><td>'.$vkbuew['beschreibung'].'</td></tr>';
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy 
	$verk_uew = '<tr class="ein_minus"><td>'.$vkbuew['artikel'].'</td><td>'.$vkbuew['preis'].'&nbsp;€</td><td>'.$vkbuew['gutscheinnr'].'</td><td>'.$vkbuew['beschreibung'].'</td></tr>';
				}
				else {
				echo '<tr><td>'.$vkbuew['artikel'].'</td><td>'.$vkbuew['preis'].'&nbsp;€</td><td>'.$vkbuew['gutscheinnr'].'</td><td>'.$vkbuew['beschreibung'].'</td></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyy
	$verk_uew = '<tr><td>'.$vkbuew['artikel'].'</td><td>'.$vkbuew['preis'].'&nbsp;€</td><td>'.$vkbuew['gutscheinnr'].'</td><td>'.$vkbuew['beschreibung'].'</td></tr>';
				}	
			}
	$verk_uew_all .= $verk_uew;
			}
			$Asumme_verkauf_uew = array_sum($summe_verkauf_uew);
			$summe_verkauf_uew = array();
				echo '<tr><th class="trenner_summe">Summe aus Verkauf per Überweisung</th><th class="trenner_summe">'.number_format($Asumme_verkauf_uew, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyy
	$Sverk_uew = '<tr><th class="trenner_summe">Summe aus Verkauf per Überweisung</th><th class="trenner_summe">'.number_format($Asumme_verkauf_uew, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
				
				
		}
		else {
			$Asumme_verkauf_uew = 0;
			$hd_verk_uew = '';
			$verk_uew_all = '';
			$Sverk_uew = '';
		}
		
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxAusgaben ermitteln und Ausgeben
		$stmt_ausgaben_kb->execute(array($tagesid, "Ausgabe", "Ausgabe -%", "Ausgabe 0%", "Bar_Aus_Storno"));
		$ausgaben = $stmt_ausgaben_kb->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($ausgaben)) {
		$summe_ausgaben[] = 0;			//Variable Einführen um Fehler bei leer (nur Storno) im ersten Lauf zu verhindern
				echo '<tr><th colspan ="4">Ausgaben</th></tr>
				<tr><th>Artikel</th><th>Preis</th><th>Beleg Nr.</th><th>Info</th></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyy
	$hd_ausgaben = '<tr class="th_2"><th colspan ="4">&nbsp;&nbsp;Ausgaben</th></tr>
				<tr><th>Artikel</th><th>Preis</th><th>Beleg Nr.</th><th>Info</th></tr>';
				
			foreach ($ausgaben AS $akb) {
			If ($akb['klasse'] == "storno") {
				echo '<tr class="storno"><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyy
	$ausgaben = '<tr class="storno"><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
	
			}
			else {
				$summe_ausgaben[] = $akb['preis'];
				If ($akb['wert'] == "Ausgabe -%") {
				echo '<tr class="ein_minus"><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy 
	$ausgaben = '<tr class="ein_minus"><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
				}
				
				elseif ($akb['wert'] == "Ausgabe 0%") {
				echo '<tr class="aus_null"><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy 
	$ausgaben = '<tr class="aus_null"><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
				}
				
				else {
				echo '<tr><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyy
	$ausgaben = '<tr><td>'.$akb['artikel'].'</td><td>'.$akb['preis'].'&nbsp;€</td><td>'.$akb['belegnr'].'</td><td>'.$akb['beschreibung'].'</td></tr>';
				}	
			}
	$ausgaben_all .= $ausgaben;
			}
			$Asumme_ausgaben = array_sum($summe_ausgaben);
			$summe_ausgaben = array();
				echo '<tr><th class="trenner_summe">Barsumme Ausgaben</th><th class="trenner_summe">'.number_format($Asumme_ausgaben, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
				
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyy
	$Sausgaben = '<tr><th class="trenner_summe">Barsumme Ausgaben</th><th class="trenner_summe">'.number_format($Asumme_ausgaben, 2, ",", ".").' €</th><th class="trenner_summe" colspan="2"></th></tr>';
				
		}
		else {
			$Asumme_ausgaben = 0;
			$hd_ausgaben = '';
			$ausgaben_all = '';
			$Sausgaben = '';
		}
		
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxWechselgeld Start und Stopp ermitteln Tabellenzeile Ausgabe
			$start = 0;
			$stopp = 0;
		$stmt_kb_kassenstart->execute(array($tagesid));
		$start_stopp = $stmt_kb_kassenstart->fetchAll(PDO::FETCH_ASSOC);
		If (!empty($start_stopp)) {
			foreach($start_stopp AS $wg) {
				If (!empty($wg['wert']) AND $wg['wert'] == "Entnahme") {
					$stopp = $wg['preis'];
				}

				If (!empty($wg['wert']) AND $wg['wert'] == "startKasse") {
					$start = $wg['preis'];
				}	
			}
		}

		
//xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxUmsatz Barkasse berechnen und Ausgeben, Ohne Umsatz keine Ausgabe
		$gesamtumsatz = $AsummeMassage+$Asumme_verkauf_bar+$Asumme_verkauf_gs+$Asumme_verkauf_uew;
		$barkasse = $gesamtumsatz+$start-$Asumme_massage_kb_gs-$Asumme_massage_kb_uew-$Asumme_verkauf_gs-$Asumme_verkauf_uew-$Asumme_ausgaben;

		
		If ($gesamtumsatz == 0 AND $start == 0 AND $barkasse == 0 AND $stopp == 0) {
			$tagesabrechnung = '';
		}
		else {
		echo '<tr><th colspan ="2"></th><th style="text-align: left;">Gesamtumsatz</th><th style="text-align: left;">'.number_format($gesamtumsatz, 2, ",", ".").' €</th></tr>
		<tr style="color:red;"><th colspan ="2"></th><th style="text-align: left;">Wechselgeld Start </th><th style="text-align: left;">'.number_format($start, 2, ",", ".").' €</th></tr>
		<tr><th colspan ="2"></th><th style="text-align: left;">Barkasse</th><th style="text-align: left;">'.number_format($barkasse, 2, ",", ".").' €</th></tr>
		<tr style="color:red;"><th colspan ="2"></th><th style="text-align: left;">Kassenentnahme </th><th style="text-align: left;">'.number_format($stopp, 2, ",", ".").' €</th></tr>
		<tr><td class="trenner_end" colspan ="4"></td></tr>';
		
				// Variable für PDF yyyyyyyyyyyyyyyyyyyyyyyyyyyy
	$tagesabrechnung = '<tr><th></th><th colspan ="2" style="text-align: left;">Gesamtumsatz</th><th style="text-align: left;">'.number_format($gesamtumsatz, 2, ",", ".").'&nbsp;€</th></tr>
		<tr style="color:red;"><th></th><th colspan ="2" style="text-align: left;">Wechselgeld Start </th><th style="text-align: left;">'.number_format($start, 2, ",", ".").'&nbsp;€</th></tr>
		<tr><th></th><th colspan ="2" style="text-align: left;">Barkasse</th><th style="text-align: left;">'.number_format($barkasse, 2, ",", ".").'&nbsp;€</th></tr>
		<tr style="color:red;"><th></th><th colspan ="2" style="text-align: left;">Kassenentnahme </th><th style="text-align: left;">'.number_format($stopp, 2, ",", ".").'&nbsp;€</th></tr>
		<tr><td class="trenner_end" colspan ="4"></td></tr>';
		}
		
		$kb_all_1day = $hd.$kb_day.$hd_ma.$kb_ma_pdf_all.$kb_Sma_pdf.$hd_ma_gs.$ma_gs_all.$Sma_gs. $hd_ma_uew.$ma_uew_all.$Sma_uew.$Sbar_ma.$hd_verk_bar.$verk_bar_all.$Sverk_bar.$hd_verk_gs.$verk_gs_all.$Sverk_gs.$hd_verk_uew.$verk_uew_all.$Sverk_uew.$hd_ausgaben.$ausgaben_all.$Sausgaben.$tagesabrechnung;
		
		$kb_ma_pdf_all = '';
		$ma_gs_all = '';
		$ma_uew_all = '';
		$verk_bar_all = '';
		$verk_gs_all = '';
		$verk_uew_all = '';
		$ausgaben_all = '';
		
		$kb_all_day .= $kb_all_1day;
		
	}
				

}




?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Kassenbuch</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
	<link href="../../css/terminformular.css" rel="stylesheet">
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
  </head>
 
<body>
<div>
<table class="kassenbuch">
<?php getKassenbuch(); ?>
</table>
<div class="pdf_kassenbuch">
	<form action="kassenbuch_pdf.php" method="post">
		<input type="hidden" name="kb_all_day" value='<?php echo $kb_all_day ?>'>
		<!--<input type="hidden" name="kb_day" value='<?php echo $kb_day ?>'>
		<input type="hidden" name="kb_ma_pdf_all" value='<?php echo $kb_ma_pdf_all ?>'>
		<input type="hidden" name="kb_Sma_pdf" value='<?php echo $kb_Sma_pdf ?>'>
		<input type="hidden" name="zeile_kbEinth" value='<?php echo $zeile_kbEinth ?>'>
		<input type="hidden" name="zeile_kbEinB" value='<?php echo $zeile_kbEinB ?>'>
		<input type="hidden" name="zeile_kbEinC" value='<?php echo $zeile_kbEinC ?>'>
		<input type="hidden" name="zeile_kbAusth" value='<?php echo $zeile_kbAusth ?>'>
		<input type="hidden" name="zeile_kbAusB" value='<?php echo $zeile_kbAusB ?>'>
		<input type="hidden" name="zeile_kbAusC" value='<?php echo $zeile_kbAusC ?>'>
		<input type="hidden" name="zeile_gsEingth" value='<?php echo $zeile_gsEingth ?>'>
		<input type="hidden" name="zeile_gsEingB" value='<?php echo $zeile_gsEingB ?>'>
		<input type="hidden" name="zeile_gsEingC" value='<?php echo $zeile_gsEingC ?>'>
		<input type="hidden" name="zeile_gsVerkth" value='<?php echo $zeile_gsVerkth ?>'>
		<input type="hidden" name="zeile_gsVerkB" value='<?php echo $zeile_gsVerkB ?>'>
		<input type="hidden" name="zeile_gsVerkC" value='<?php echo $zeile_gsVerkC ?>'>-->
		<input type="hidden" name="titel" value='<?php echo $titel ?>'>

		<input type="submit" value="PDF speichern">
	</form>
</div>
</div>			
			
		
		
</body>
</html>	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	