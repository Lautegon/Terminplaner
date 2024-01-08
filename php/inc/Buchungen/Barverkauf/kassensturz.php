<?php

	include "../../dbNew.php";

	If (isset($_POST['kasse']) AND $_POST['kasse'] == "raus") {
		$datum = $_POST['datum'];
		$tagesid = $_POST['tagesid'];
		$entnahme = $_POST['entnahme'];
		$suchVarMa = $tagesid."%";
	//echo "Datum: ".$datum."<br />Tagesid: ".$tagesid."<br />";
		$stmt_entnahme_in = $dbNew->prepare("INSERT INTO kassenstand (tagesid, wert, preis) VALUE (?, ?, ?) ");
		$stmt_entnahme_in->execute(array($tagesid, "Entnahme", $entnahme));
		
		header("Location: {$_SERVER['REQUEST_URI']}", true, 303 );
			exit();
	}
	else {

	$datum = $_GET['tagaktuell'];
	$tagesid = $_GET['tagesid'];
	$suchVarMa = $tagesid."%";
	}
	
		
	
		// Abfrage Massage Umsätze / Funktion Tabelle Massage Umsätze
	$stmt_kassensturz_Ma = $dbNew->prepare("SELECT id, massageart, dauer, preis, vorname, nachname FROM buchungen WHERE id LIKE ? ORDER BY id");
	$stmt_kassensturz_Ma->execute(array($suchVarMa));
	$tagesumsatz_Ma = $stmt_kassensturz_Ma->fetchAll(PDO::FETCH_ASSOC);
		
	If (empty($tagesumsatz_Ma)) {
		$gesamtUmsatz_Ma = 0;
	}
	else {
		foreach($tagesumsatz_Ma as $key => $maPreis) {
			$umsatz_Ma[] = $maPreis['preis'];
		}
		$gesamtUmsatz_Ma = array_sum($umsatz_Ma);
		
		// Ausgabe der Tabelle Umsätze Massagen
		function getMassageumsatz() {
			global $tagesumsatz_Ma;
			global $gesamtUmsatz_Ma;
			global $datum;

				echo '<table><tr><th class="th_mas" colspan="6">Gesamtumsatz Massagen</th></tr><tr class="th_2"><th>Datum</th><th>Massage</th><th>Dauer</th><th>Preis</th><th>Vorname</th><th>Nachname</th><tr>';
				
				foreach($tagesumsatz_Ma as $key => $umsatz_satz) {

									$jahr = "20".substr($umsatz_satz['id'],-12,2);
									$mo = substr($umsatz_satz['id'],-10,2);
									$day = substr($umsatz_satz['id'],-8,2);


					echo "<tr><td>".$day.".".$mo.".".$jahr."</td><td>".$umsatz_satz['massageart']."</td><td>".$umsatz_satz['dauer']." min.</td><td>".sprintf("%.2f", $umsatz_satz['preis'])."&nbsp;€</td><td>".$umsatz_satz['vorname']."</td><td>".$umsatz_satz['nachname']."</td></tr>";
				}
					echo '<tr class="fett"><td>Gesamt am:</td><td colspan="2">'.$datum.'</td><td>'.sprintf("%.2f", $gesamtUmsatz_Ma).'&nbsp;€</td></tr> </table>';
		}
	}
	
	
	
		// Abfrage Massagen per Überweisung Bezahlt --> Abfrage aus barverkauf
	$stmt_massagen_uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND wert = ? AND klasse = ? ORDER BY id");
	$stmt_massagen_uew->execute(array($tagesid, "Massage", "uew_MA"));
	$massagen_uew = $stmt_massagen_uew->fetchAll(PDO::FETCH_ASSOC);
	If (empty($massagen_uew)) {
		$summe_uew = 0;
	}
	else {
		foreach ($massagen_uew as $key => $uewPreis) {
			$umsatz_uew[] = $uewPreis['preis'];
		}
		$summe_uew = array_sum($umsatz_uew);
	}
	
	
			// Abfrage Massagen mit Gutschein Bezahlt --> Abfrage aus barverkauf
	$stmt_massagen_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE tagesid = ? AND wert = ? AND klasse = ? ORDER BY id");
	$stmt_massagen_gs->execute(array($tagesid, "GS Einlösen", "gs"));
	$massagen_gs = $stmt_massagen_gs->fetchAll(PDO::FETCH_ASSOC);
	//print_r($massagen_gs);
	If (empty($massagen_gs)) {
		$summe_gs = 0;
	}
	else {
		foreach ($massagen_gs as $key => $gsPreis) {
			$umsatz_gs[] = $gsPreis['preis'];
		}
		$summe_gs = array_sum($umsatz_gs);
	}
	//echo "</br>".$summe_gs;
	
		//Ausgabe Tabelle Massagen mit Gutschein bezahlt
		
		function getMassageGs() {
			global $massagen_gs;
			global $summe_gs;
			global $datum;
		
		
			echo '<table><table><tr><th class="th_mas" colspan="2">Massagen</th><th class="gutschein_back"> </th><th class ="th_mas" colspan="2">Gutschein</th></tr><tr class="th_2"><th>Datum</th><th>Massage</th><th>Wert</th><th>Gutsch. Nr.</th><th>Preis</th><th>Info</th></tr>';
		foreach ($massagen_gs as $key => $umsatz_gs) {
			
				echo '<tr><td>'.$datum.'</td><td>'.$umsatz_gs['artikel'].'</td><td class = "gutschein_back_1"> </td><td>'.$umsatz_gs['gutscheinnr'].'</td><td>'.sprintf("%.2f", $umsatz_gs['preis']).'&nbsp;€</td><td>'.$umsatz_gs['beschreibung'].'</td></tr>';
		}
			echo '<tr class="fett"><td>Gesamt am: </td><td colspan="3">'.$datum.'</td><td>'.sprintf("%.2f", $summe_gs).'&nbsp;€</td></tr></table>';
		}
	
	
		// Ausgabe Tabelle Massagen mit Überweisung bezahlt
		
		function getMassageUew() {
			global $massagen_uew;
			global $summe_uew;
			global $datum;
	
				echo '<table><tr><th class="th_mas" colspan="2">Massagen</th><th class="ec"> </th><th class ="th_mas" colspan ="2">Überweisung</th></tr>
			<tr class="th_2"><th>Datum</th><th>Massage</th><th>Wert</th><th>Preis</th><th>Info</th></tr>';

		foreach($massagen_uew as $key => $umsatz_uew) {
			
				echo '<tr><td>'.$datum.'</td><td>'.$umsatz_uew['artikel'].'</td><td class = "ec_1"> </td><td>'.sprintf("%.2f", $umsatz_uew['preis']).'&nbsp;€</td><td>'.$umsatz_uew['beschreibung'].'</td></tr>';
		}
				
			echo '<tr class="fett"><td>Gesamt am: </td><td colspan="2">'.$datum.'</td><td>'.sprintf("%.2f", $summe_uew).'&nbsp;€</td></tr></table>';
		}
	
	
				// Abfragen Wechselgeld und Kassenentnahme +++++++++++++++++++
	// Abfrage Wechselgeld Kassenstart
	$stmt_startgeld = $dbNew->prepare("SELECT preis FROM kassenstand WHERE tagesid = ? AND wert = ? ");
	$stmt_startgeld->execute(array($tagesid, "startKasse"));
	$startgeldja = $stmt_startgeld->rowCount();
	$startgeld = $stmt_startgeld->fetchAll();
	foreach ($startgeld AS $euroE) {
	$geldStart = $euroE['preis'];
	}
	//echo $startgeldja."<br />";
	
		// Abfrage Kassentnahme Kassenschluß
	$stmt_schlussgeld = $dbNew->prepare("SELECT preis FROM kassenstand WHERE tagesid = ? AND wert = ? ");
	$stmt_schlussgeld->execute(array($tagesid, "Entnahme"));
	$schlussgeldja = $stmt_schlussgeld->rowCount();
	$schlussgeld = $stmt_schlussgeld->fetchAll();
	foreach ($schlussgeld AS $euroR) {
	$geldschluss = $euroR['preis'];
	}
	//echo $schlussgeldja."<br />";
				// Ende Abfragen Wechselgeld und Kassenentnahme +++++++++++++++++++
	
	
	// Abfrage der Tabelle Barumsatz Einnahmen
	
	$stmt_kassensturz_Bar = $dbNew->prepare("SELECT * FROM barverkauf WHERE (wert = ? OR wert = ?) AND tagesid = ? AND klasse = ? ORDER BY 'tagesid' ");
	$stmt_kassensturz_Bar->execute(array("Einnahme", "Einnahme -%", $tagesid, ""));
	$tagesumsatz_Bar = $stmt_kassensturz_Bar->fetchAll(PDO::FETCH_ASSOC);


		foreach($tagesumsatz_Bar as $key => $barPreis) {
			$umsatz_Bar[] = $barPreis['preis'];
		}
	If (empty($umsatz_Bar)) {
		$gesamtUmsatz_Bar = 0;
	}
	else {
		$gesamtUmsatz_Bar = array_sum($umsatz_Bar);
	}
	
	//Abfrage Tabelle Barumsatz mit Überweisung
	$stmt_kassensturz_Uew = $dbNew->prepare("SELECT * FROM barverkauf WHERE  (wert = ? OR wert = ?) AND tagesid = ? AND klasse = ? ORDER BY 'tagesid' ");
	$stmt_kassensturz_Uew->execute(array("Einnahme", "Einnahme -%", $tagesid, "uew"));
	$tagesumsatz_Uew = $stmt_kassensturz_Uew->fetchAll(PDO::FETCH_ASSOC);
	
		foreach($tagesumsatz_Uew as $key => $uewPreis) {
			$umsatz_Uew[] = $uewPreis['preis'];
		}
	If (empty($umsatz_Uew)) {
		$gesamtUmsatz_Uew = 0;
	}
	else {
		$gesamtUmsatz_Uew = array_sum($umsatz_Uew);
	}
	
	//Abfrage Tabelle Barumsatz mit Gutschein
		$stmt_kassensturz_gs = $dbNew->prepare("SELECT * FROM barverkauf WHERE (wert = ? OR wert = ?) AND tagesid = ? AND klasse = ? ORDER BY 'tagesid' ");
	$stmt_kassensturz_gs->execute(array("GS Einlösen", "GS Einlösen -%", $tagesid, "gs_wa"));
	$tagesumsatz_gs = $stmt_kassensturz_gs->fetchAll(PDO::FETCH_ASSOC);
	
		foreach($tagesumsatz_gs as $key => $gsPreis) {
			$verkauf_gs[] = $gsPreis['preis'];
			
		If ($gsPreis['artikel'] == "Gutschein") {
			$verkauf_gsT[] = $gsPreis['preis'];			//Summe Gutschein getauscht ermitteln für Abzug von Gesamtumsatz
		}
		}
	If (empty($verkauf_gs)) {
		$gesamtUmsatz_gs = 0;
	}
	else {
		$gesamtUmsatz_gs = array_sum($verkauf_gs);
	}
	
	If (empty($verkauf_gsT)) {							//Summe Gutschein getauscht ermitteln für Abzug von Gesamtumsatz
		$gesamtUmsatz_gsT = 0;
	}
	else {
		$gesamtUmsatz_gsT = array_sum($verkauf_gsT);
	}
		
					// Ausgabe der Tabelle Bar Einnahmen
			function getBarumsätze() {
					global $tagesumsatz_Bar;
					global $gesamtUmsatz_Bar;
					global $tagesumsatz_Uew;
					global $gesamtUmsatz_Uew;
					global $tagesumsatz_gs;
					global $gesamtUmsatz_gs;
					global $datum;

			echo '<table><tr><th class="th_bar" colspan="2">Einnahmen</th><th class="bar_1"> </th><th class="th_bar" colspann="2">Bar</th></tr><tr class="th_2"><th>Datum</th><th>Artikel</th><th>Wert</th><th>Gutsch. Nr.</th><th>Preis</th><th>Info</th></tr>';
			
		foreach($tagesumsatz_Bar as $key => $umsatz_bar) {
			echo '<tr><td>'.$datum.'</td><td>'.$umsatz_bar['artikel'].'</td><td class="bar_1"></td><td>'.$umsatz_bar['gutscheinnr'].'</td><td>'.sprintf("%.2f", $umsatz_bar['preis']).'&nbsp;€</td><td>'.$umsatz_bar['beschreibung'].'</td></tr>';
		}	
			echo '<tr class="fett"><td>Gesamt Bar am: </td><td colspan="3">'.$datum.'</td><td>'.sprintf("%.2f", $gesamtUmsatz_Bar).'&nbsp;€</td><td> </td></tr></table><div>&nbsp;</div>';
			
			echo '<table><tr><th class="th_bar" colspan="2">Einnahmen</th><th class="gutschein_back_1"> </th><th class="th_bar" colspann="2">Gutschein</th></tr><tr class="th_2"><th>Datum</th><th>Artikel</th><th>Wert</th><th>Gutsch. Nr.</th><th>Preis</th><th>Info</th></tr>';
		foreach($tagesumsatz_gs as $key => $umsatz_gs) {
		If ($umsatz_gs['artikel'] == "Gutschein") {
			echo '<tr class="gutscheintausch"><td>'.$datum.'</td><td>'.$umsatz_gs['artikel'].'</td><td class="gutschein_back_1"></td><td>'.$umsatz_gs['gutscheinnr'].'</td><td>'.sprintf("%.2f", $umsatz_gs['preis']).'&nbsp;€</td><td>'.$umsatz_gs['beschreibung'].'</td></tr>';
		}
		else {
			echo '<tr><td>'.$datum.'</td><td>'.$umsatz_gs['artikel'].'</td><td class="gutschein_back_1"></td><td>'.$umsatz_gs['gutscheinnr'].'</td><td>'.sprintf("%.2f", $umsatz_gs['preis']).'&nbsp;€</td><td>'.$umsatz_gs['beschreibung'].'</td></tr>';
		}
		}	
			echo '<tr class="fett"><td>Gesamt Gutschein am: </td><td colspan="3">'.$datum.'</td><td>'.sprintf("%.2f", $gesamtUmsatz_gs).'&nbsp;€</td><td> </td></tr></table><div>&nbsp;</div>';
			
			echo '<table><tr><th class="th_bar" colspan="2">Einnahmen</th><th class="ec_1"> </th><th class ="th_bar">Überweisung</th></tr><tr class="th_2"><th>Datum</th><th>Artikel</th><th>Wert</th><th>Gutsch. Nr.</th><th>Preis</th><th>Info</th></tr>';
		foreach($tagesumsatz_Uew as $key => $umsatz_uew) {
			echo '<tr><td>'.$datum.'</td><td>'.$umsatz_uew['artikel'].'</td><td class="ec_1"></td><td>'.$umsatz_uew['gutscheinnr'].'</td><td>'.sprintf("%.2f", $umsatz_uew['preis']).'&nbsp;€</td><td>'.$umsatz_uew['beschreibung'].'</td></tr>';
		}	
			echo '<tr class="fett"><td>Gesamt Überweisung am: </td><td colspan="3">'.$datum.'</td><td>'.sprintf("%.2f", $gesamtUmsatz_Uew).'&nbsp;€</td><td> </td></tr></table><div>&nbsp;</div>';
		}
	
		// Abfrage Barverkauf Ausgaben
	$stmt_kassensturz_Aus = $dbNew->prepare("SELECT * FROM barverkauf WHERE (wert = ? OR wert = ? OR wert = ?) AND tagesid = ? AND klasse = ? ");
	$stmt_kassensturz_Aus->execute(array("Ausgabe", "Ausgabe -%", "Ausgabe 0%", $tagesid, ""));
	$tagesumsatz_Aus = $stmt_kassensturz_Aus->fetchAll(PDO::FETCH_ASSOC);
	
	If (empty($tagesumsatz_Aus)) {
		$gesamtUmsatz_Aus = 0;
		$ausgabe_Aus = 0;
	}
	else {
		foreach($tagesumsatz_Aus as $key => $ausPreis) {
			$umsatz_Aus[] = $ausPreis['preis'];
		}
		$gesamtUmsatz_Aus = array_sum($umsatz_Aus);
		
		function getBarAus() {
			global $tagesumsatz_Aus;
			global $gesamtUmsatz_Aus;
			global $datum;
			
				// Ausgabe der Tabelle Ausgaben xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
		echo '<table><tr><th class="th_aus" colspan="2">Ausgaben Bar</th><th class="bar_1"> </th><th class ="th_aus" colspan ="2">Bar</th></tr>
		<tr class="th_2"><th>Datum</th><th>Artikel</th><th>Wert</th><th>Beleg Nr.</th><th>Preis</th><th>info</th></tr>';
			foreach($tagesumsatz_Aus as $key => $umsatz_Aus) {
				If ($umsatz_Aus != "") {
								
					If ($umsatz_Aus['klasse'] != "storno")  {	
		echo '<tr><td>'.$datum.'</td><td>'.$umsatz_Aus['artikel'].'</td><td class="bar_1"></td><td>'.$umsatz_Aus['belegnr'].'</td><td>'.sprintf("%.2f", $umsatz_Aus['preis']).'&nbsp;€</td><td>'.$umsatz_Aus['beschreibung'].'</td></tr>';
					}		
				}
			}

					//$gesamtUmsatz_Aus = array_sum($umsatz_gesamt_Aus);
		echo '<tr class="fett"><td>Gesamt am: </td><td colspan="3">'.$datum.'</td><td>'.sprintf("%.2f", $gesamtUmsatz_Aus).'&nbsp;€</td></tr></table>';
		}
	}
	

	
			// Schnellübersicht Kassenabrechnung
		function getKasse() {
			//Wechselgeld
			global $tagesid;
			global $geldStart;
			global $startgeldja;
			global $schlussgeldja;
			global $geldschluss;
			//Summen Massageeinnahmen
			global $gesamtUmsatz_Ma;
			global $summe_uew;
			global $summe_gs;
			//Summen Barverkauf
			global $gesamtUmsatz_Bar;
			global $gesamtUmsatz_Uew;
			global $gesamtUmsatz_gs;
			//Summe von getauschten Gutscheinen zum Abzug vom Gesamtumsatz Verkauf da nie Geld geflossen
			global $gesamtUmsatz_gsT;
			//Summe Barausgaben
			global $gesamtUmsatz_Aus;
			
			global $datum;
			
			$umsatzVerkauf = $gesamtUmsatz_Bar+$gesamtUmsatz_Uew+$gesamtUmsatz_gs-$gesamtUmsatz_gsT;
			$gesamt_umsatz = $gesamtUmsatz_Ma+$umsatzVerkauf;

			
		echo '<table width="400px"><tr><th class="th_1" colspan="4">Kassenabrechnung</th></tr>
		<tr><td style="text-align: left;">Umsatz Massagen</td><td> </td><td style="text-align: right;">'.sprintf("%.2f", $gesamtUmsatz_Ma).'&nbsp;€</td><td> </td></tr>';
		
		
		echo '<tr><td style="text-align: left;">Umsatz Verkauf</td><td class="plus"> + </td><td style="text-align: right;">'.sprintf("%.2f", $umsatzVerkauf).'&nbsp;€</td><td> </td></tr>';
		
		
		echo '<tr class="fett"><td colspan="2" style="text-align: left;">Gesamtumsatz am '.$datum.'</td><td style="text-align: right;">'.sprintf("%.2f", $gesamt_umsatz).'&nbsp;€</td></tr>';
		
		echo '<tr><td style="text-align: left;">Massagen mit Gutschein</td><td class="minus"> - </td><td style="text-align: right;">'.sprintf("%.2f", $summe_gs).'&nbsp;€</td><td class="gutschein_back_1"> </td></tr>';
		
		echo '<tr><td style="text-align: left;">Massagen mit Überweisung</td><td class="minus"> - </td><td style="text-align: right;">'.sprintf("%.2f", $summe_uew).'&nbsp;€</td><td class="ec_1"> </td></tr>';
		
		echo '<tr><td style="text-align: left;">Verkauf mit Gutschein</td><td class="minus"> - </td><td style="text-align: right;">'.sprintf("%.2f", $gesamtUmsatz_gs).'&nbsp;€</td><td class="gutschein_back_1"> </td></tr>';
		
		echo '<tr><td style="text-align: left;">Verkauf mit Überweisung</td><td class="minus"> - </td><td style="text-align: right;">'.sprintf("%.2f", $gesamtUmsatz_Uew).'&nbsp;€</td><td class="ec_1"> </td></tr>';
		
		echo '<tr><td style="text-align: left;">Ausgaben</td><td class="minus"> - </td><td style="text-align: right;">'.sprintf("%.2f", $gesamtUmsatz_Aus).'&nbsp;€</td><td class="bar_1"> </td></tr>';
		
	If ($startgeldja > 0) { 
		echo '<tr style="color: red;"><td style="text-align: left;">Wechselgeld</td><td class="plus"> + </td><td style="text-align: right;">'.sprintf("%.2f", $geldStart).'&nbsp;€</td><td class="bar_1"> </td></tr>';
	}
	else {
		echo '<tr><td style="text-align: left; color: red; font-weight: 600;">Kein Wechselgeld</td><td class="plus"> + </td><td style="text-align: right;">0&nbsp;€</td><td class="bar_1"> </td></tr>';
	}
		
		$kassenstand = $gesamt_umsatz-$summe_uew-$summe_gs-$gesamtUmsatz_Uew-$gesamtUmsatz_gs-$gesamtUmsatz_Aus+$geldStart;
		
		echo '<tr class="fett"><td colspan="2" style="text-align: left;">Kassenstand am '.$datum.'</td><td style="text-align: right;">'.sprintf("%.2f", $kassenstand).'&nbsp;€</td><td class="bar_1"> </td></tr></table>';
	If ($schlussgeldja == 0) {
		echo '<p>&nbsp;</p><div id="we" class="form_1">
		<form action="#" method="post">
		<input type="hidden" name="kasse" value="raus">
		<input type="hidden" name="datum" value="'.$datum.'">
		<input type="hidden" name="tagesid" value="'.$tagesid.'">
		<label for="entnahme">Kassentnahme am '.$datum.'</label>
		<input type="number" class="input_number" name="entnahme" min="0" step="0.01">
		<input class="termform" type="submit" value="Speichern"></form></div>';
	}
	else {
		echo '<div class="form_1"><p class="th_1">'.$datum.' Kassenentnahme '.$geldschluss.' €</p></div>';
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
    <title>Auswertungen</title>
    <!-- Bootstrap -->
    <link href="../../../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../../css/custom.css" rel="stylesheet">
	<link href="../../../../css/kalender.css" rel="stylesheet">
	<link href="../../../../css/terminformular.css" rel="stylesheet">
	<script src="../../../../js/jquery-3.5.1.min.js"></script>
	<script src="../../../../js/bootstrap.min.js"></script>
  </head>
 
<body>
<div class="titel"><p class="gross">Kassenbericht</p></div>
<div id="umsatz_kurz"><?php getKasse() ?></div>

<div><button href="#" id="umsatz_an">Detail</button></div>

<div id ="umsatz">

<div><p>&nbsp;</p></div>
<div id=""><?php If ($gesamtUmsatz_Bar == "0") { echo "Keine Barumsätze"; } else { getBarumsätze(); } ?></div>

<div><p>&nbsp;</p></div>
<div id=""><?php If ($gesamtUmsatz_Ma == "0") { echo "Keine Umsätze aus Massagen";} else { getMassageumsatz(); } ?></div>

<div><p>&nbsp;</p></div>
<div id=""><?php If ($summe_gs == "0") { echo "Keine Massage mit Gutschein";} else { getMassageGs(); } ?></div>

<div><p>&nbsp;</p></div>
<div id=""><?php If ($summe_uew == "0") { echo "Keine Massage mit Überweisung";} else { getMassageUew(); } ?></div>

<div><p>&nbsp;</p></div>
<div id=""><?php If ($gesamtUmsatz_Aus == "0") { echo "Keine Barausgaben"; } else  { getBarAus(); } ?></div>

</div>


<div class="abstand"><p>&nbsp;</p></div>
<div class="abstand"><p>&nbsp;</p></div>





<script>
jQuery(document).ready(function() {
	jQuery('#umsatz_an').click(function() {
		jQuery('#umsatz').toggle('slow');
	})
});
</script>
			

</body>
</html>