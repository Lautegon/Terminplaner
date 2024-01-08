<?php

		include "../inc/dbNew.php";
		
		$mwst_fix = 19;
		$mwst_minder = 7;
		
			//Fortlaufende ID's aus Start,- und End-Datum Erstellen
		$umVon = new DateTime($_POST['Um_von']);
		$umBis = new DateTime($_POST['Um_bis']);
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($umVon, $interval, $umBis);
		foreach ($period as $dt) {
			$abfrage_ID = $dt->format("ymd");
			$abfrage_IDS[] = $abfrage_ID;
		}


			
				//Abfrage Massagen im Zeitraum, Gesamtumsatz ermitteln
	$stmt_umsatz_massage = $dbNew->prepare("SELECT preis FROM buchungen WHERE id LIKE ?");
		foreach ($abfrage_IDS AS $tages_id) {
			$suchVar = $tages_id."%";
			$stmt_umsatz_massage->execute(array($suchVar));
			$umsatz_massage = $stmt_umsatz_massage->fetchAll(PDO::FETCH_ASSOC);
			//print_r($umsatz_massage);
		
			foreach ($umsatz_massage AS $massage) {
				$massage_preis = $massage['preis'];
				$massage_preis_all[] = $massage_preis;
			}
		}
		If (!empty($massage_preis_all)) {
			$massage_summe_preis = array_sum($massage_preis_all);
			$massage_Gesamt_Netto = round($massage_summe_preis*100/(100+$mwst_fix),2 , PHP_ROUND_HALF_UP);
			$massage_Gesamt_Mwst = round($massage_summe_preis-$massage_Gesamt_Netto,2 , PHP_ROUND_HALF_UP);
		}
		else {
			$massage_summe_preis = 0;
			$massage_Gesamt_Netto = 0;
			$massage_Gesamt_Mwst = 0;
		}
			
			
				//Abfrage Verkäufe / nicht Gutschein im Zeitraum, Gesamtumsatz ermitteln
	$stmt_verkauf_bar = $dbNew->prepare("SELECT wert, preis FROM barverkauf WHERE (tagesid = ? AND artikel != ? AND (wert = ? OR wert = ?)) OR (tagesid = ? AND artikel != ? AND (wert = ? OR wert = ?) AND klasse = ?)");		
		foreach ($abfrage_IDS AS $tages_id) {
			$stmt_verkauf_bar->execute(array($tages_id, "Gutschein", "Einnahme", "Einnahme -%", $tages_id, "Gutschein", "GS Einlösen", "GS Einlösen -%", "gs_wa"));
			$umsatz_bar = $stmt_verkauf_bar->fetchAll(PDO::FETCH_ASSOC);

			foreach ($umsatz_bar AS $wert) {
				If ($wert['wert'] == "Einnahme" OR $wert['wert'] == "GS Einlösen") {
					$umsatz_fix = $wert['preis'];
					$umsatz_fix_all[] = $umsatz_fix;
				}
				else {
					$umsatz_minder = $wert['preis'];
					$umsatz_minder_all[] = $umsatz_minder;
				}
			}
		}		
				//print_r($umsatz_minder_all);
		If (!empty($umsatz_fix_all)) {
			$verkauf_fix = array_sum($umsatz_fix_all);
				$verkauf_fix_netto = round($verkauf_fix*100/(100+$mwst_fix),2 , PHP_ROUND_HALF_UP);
				$verkauf_fix_mwst = round($verkauf_fix-$verkauf_fix_netto,2 , PHP_ROUND_HALF_UP);
		}
		else {
			$verkauf_fix = 0;
			$verkauf_fix_netto = 0;
			$verkauf_fix_mwst = 0;
		}
		If (!empty($umsatz_minder_all)) {	
			$verkauf_minder = array_sum($umsatz_minder_all);
				$verkauf_minder_netto = round($verkauf_minder*100/(100+$mwst_minder),2 , PHP_ROUND_HALF_UP);
				$verkauf_minder_mwst = round($verkauf_minder-$verkauf_minder_netto,2 , PHP_ROUND_HALF_UP);
		}
		else {
			$verkauf_minder = 0;
			$verkauf_minder_netto = 0;
			$verkauf_minder_mwst = 0;
		}
	

			//Abfrage Ausgaben im Zeitraum Gesamtumsatz ermitteln
	$stmt_ausgaben = $dbNew->prepare("SELECT wert, preis FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ? OR wert = ?)");
		foreach ($abfrage_IDS AS $tages_id) {
			$stmt_ausgaben->execute(array($tages_id, "Ausgabe", "Ausgabe -%", "Ausgabe 0%"));
			$ausgaben = $stmt_ausgaben->fetchAll(PDO::FETCH_ASSOC);

			foreach ($ausgaben AS $wert) {
				If ($wert['wert'] == "Ausgabe") {
					$ausgabe_fix = $wert['preis'];
					$ausgabe_fix_all[] = $ausgabe_fix;
				}
				elseif ($wert['wert'] == "Ausgabe 0%") {
					$ausgabe_null = $wert['preis'];
					$ausgabe_null_all[] = $ausgabe_null;
				}
				else {
					$ausgabe_minder = $wert['preis'];
					$ausgabe_minder_all[] = $ausgabe_minder;
				}
			}
		}
		If (!empty($ausgabe_fix_all)) {
			$ausgabe_fix = array_sum($ausgabe_fix_all);
				$ausgabe_fix_netto = round($ausgabe_fix*100/(100+$mwst_fix),2 , PHP_ROUND_HALF_UP);
				$ausgabe_fix_mwst = round($ausgabe_fix-$ausgabe_fix_netto,2 , PHP_ROUND_HALF_UP);
		}
		else {
			$ausgabe_fix = 0;
			$ausgabe_fix_netto = 0;
			$ausgabe_fix_mwst = 0;
		}
		If (!empty($ausgabe_null_all)) {
			$ausgabe_null_netto = array_sum($ausgabe_null_all);
		}
		else {
			$ausgabe_null_netto = 0;

		}
		If (!empty($ausgabe_minder_all)) {
			$ausgabe_minder = array_sum($ausgabe_minder_all);
				$ausgabe_minder_netto = round($ausgabe_minder*100/(100+$mwst_minder),2 , PHP_ROUND_HALF_UP);
				$ausgabe_minder_mwst = round($ausgabe_minder-$ausgabe_minder_netto,2 , PHP_ROUND_HALF_UP);
		}
		else {
			$ausgabe_minder = 0;
			$ausgabe_minder_netto = 0;
			$ausgabe_minder_mwst = 0;
		}
			
			//Summen Ausgabe rechte Tabelle
	$einnahme_brutto_summe = $massage_summe_preis+$verkauf_fix+$verkauf_minder;
	$einnahme_netto_summe = $massage_Gesamt_Netto+$verkauf_fix_netto+$verkauf_minder_netto;
	$einnahme_mwst_summe = $massage_Gesamt_Mwst+$verkauf_fix_mwst+$verkauf_minder_mwst;
	
	$ausgabe_brutto_summe = $ausgabe_fix+$ausgabe_minder+$ausgabe_null_netto;
	$ausgabe_netto_summe = $ausgabe_fix_netto+$ausgabe_minder_netto+$ausgabe_null_netto;
	$ausgabe_mwst_summe = $ausgabe_fix_mwst+$ausgabe_minder_mwst;
			
			//Abfrage Gutscheinverkäufe im Zeitraum, Gesamtumsatz ermitteln
	$stmt_gsverkauf = $dbNew->prepare("SELECT preis FROM barverkauf WHERE tagesid = ? AND artikel = ? AND wert = ?");
		foreach ($abfrage_IDS AS $tages_id) {
			$stmt_gsverkauf->execute(array($tages_id, "Gutschein", "Einnahme"));
			$gsverkauf = $stmt_gsverkauf->fetchAll(PDO::FETCH_ASSOC);

			foreach ($gsverkauf AS $gsPreis) {
				$gs_umsatz = $gsPreis['preis'];
				$gs_umsatz_all[] = $gs_umsatz;
			}
		}
		If (!empty($gs_umsatz_all)) {
			$gs_ist_zeitraum = array_sum($gs_umsatz_all);
		}
		else {
			$gs_ist_zeitraum = 0;
		}
		
			// Abfrage Gutscheine eingelöst, Gesamtumsatz ermitteln
	$stmt_gsein = $dbNew->prepare("SELECT preis FROM barverkauf WHERE tagesid = ? AND (wert = ? OR wert = ?)");
		foreach ($abfrage_IDS AS $tages_id) {
			$stmt_gsein->execute(array($tages_id, "GS Einlösen", "GS Einlösen -%"));
			$gsein = $stmt_gsein->fetchAll(PDO::FETCH_ASSOC);

			foreach ($gsein AS $gsPreis) {
				$gs_einlösen = $gsPreis['preis'];
				$gs_einlösen_all[] = $gs_einlösen;
			}
		}
		If (!empty($gs_einlösen_all)) {	
			$gs_einlösen_zeitraum = array_sum($gs_einlösen_all);
		}
		else {
			$gs_einlösen_zeitraum = 0;
		}
		
			//Variable für Ausgabe Gesamtübersicht Umsätze PDF Ausgabe
			
	$A_Z = '<p>&nbsp;</p><table border="1" cellpadding="5" cellspacing="0" style="width: 100%;">
<tr><th style="font-size: 12pt; text-align: center; color: red; width: 51%;" colspan="4">Umsätze Übersicht</th><th style="width: 1%;"></th><th style="font-size: 12pt; text-align: center; color: red; width: 48%;" colspan= "4">Umsätze Summe</th></tr>
<tr><th style="font-size: 10pt; text-align: center;" colspan="4">Zeitraum: '.$umVon->format('d.m.Y').' - '.$umBis->format('d.m.Y').'</th><th></th><th colspan = "4"></th></tr>
<tr style="font-size: 9pt;"><td style="width: 18%;"></td><td style="width: 11%;">Brutto</td><td style="width: 11%;">Netto</td><td style="width: 11%;">MwSt</td><td style="width: 1%;"></td><td style="width: 16%; text-align: left;">Summe</td><td style="width: 11%;">Brutto</td><td style="width: 11%;">Netto</td><td style="width: 10%;">MwSt</td></tr>

<tr style="font-size: 8pt;"><td style="text-align: left;">Massagen:</td><td>'.number_format($massage_summe_preis, 2, ",", ".").'&nbsp;€</td><td>'.number_format($massage_Gesamt_Netto, 2, ",", ".").'&nbsp;€</td><td>'.number_format($massage_Gesamt_Mwst, 2, ",", ".").'&nbsp;€</td><td></td><td colspan= "4"></td></tr>

<tr style="font-size: 8pt;"><td style="text-align: left;">Verkauf '.$mwst_fix.'&nbsp;% MwSt</td><td>'.number_format($verkauf_fix, 2, ",", ".").'&nbsp;€</td><td>'.number_format($verkauf_fix_netto, 2, ",", ".").'&nbsp;€</td><td>'.number_format($verkauf_fix_mwst, 2, ",", ".").'&nbsp;€</td><td></td><td colspan= "4"></td></tr>

<tr style="font-size: 8pt;"><td style="text-align: left;">Verkauf '.$mwst_minder.'&nbsp;% MwSt</td><td>'.number_format($verkauf_minder, 2, ",", ".").'&nbsp;€</td><td>'.number_format($verkauf_minder_netto, 2, ",", ".").'&nbsp;€</td><td>'.number_format($verkauf_minder_mwst, 2, ",", ".").'&nbsp;€</td><td></td><td style="text-align: left;">Einnahmen</td><td>'.number_format($einnahme_brutto_summe, 2, ",", ".").'&nbsp;€</td><td>'.number_format($einnahme_netto_summe, 2, ",", ".").'&nbsp;€</td><td>'.number_format($einnahme_mwst_summe, 2, ",", ".").'&nbsp;€</td></tr>

<tr><td colspan="9"></td></tr>

<tr style="font-size: 8pt;"><td style="text-align: left;">Ausgaben '.$mwst_fix.'&nbsp;% MwSt</td><td>'.number_format($ausgabe_fix, 2, ",", ".").'&nbsp;€</td><td>'.number_format($ausgabe_fix_netto, 2, ",", ".").'&nbsp;€</td><td>'.number_format($ausgabe_fix_mwst, 2, ",", ".").'&nbsp;€</td><td></td><td colspan= "4"></td></tr>

<tr style="font-size: 8pt;"><td style="text-align: left;">Ausgaben '.$mwst_minder.'&nbsp;% MwSt</td><td>'.number_format($ausgabe_minder, 2, ",", ".").'&nbsp;€</td><td>'.number_format($ausgabe_minder_netto, 2, ",", ".").'&nbsp;€</td><td>'.number_format($ausgabe_minder_mwst, 2, ",", ".").'&nbsp;€</td><td></td><td colspan= "4"></td></tr>
	
<tr style="font-size: 8pt;"><td style="text-align: left;">Ausgaben 0&nbsp;% MwSt</td><td>'.number_format($ausgabe_null_netto, 2, ",", ".").'&nbsp;€</td><td>'.number_format($ausgabe_null_netto, 2, ",", ".").'&nbsp;€</td><td>0&nbsp;€</td><td></td><td style="text-align: left;">Ausgaben</td><td>'.number_format($ausgabe_brutto_summe, 2, ",", ".").'&nbsp;€</td><td>'.number_format($ausgabe_netto_summe, 2, ",", ".").'&nbsp;€</td><td>'.number_format($ausgabe_mwst_summe, 2, ",", ".").'&nbsp;€</td></tr>	
</table>';

$gs_verlauf = '<p>&nbsp;</p>	
<table border="1" cellpadding="8" cellspacing="0" style="width: 100%;">
<tr><th style="font-size: 12pt; text-align: center; color: red; width: 49%;" colspan="2">Gutscheine Übersicht</th></tr>
<tr><th style="font-size: 10pt; text-align: center;" colspan="2">Zeitraum: '.$umVon->format('d.m.Y').' - '.$umBis->format('d.m.Y').'</th></tr>
<tr style="font-size: 8pt;"><td>Summe Gutscheine verkauft: </td><td>'.number_format($gs_ist_zeitraum, 2, ",", ".").'&nbsp;€</td></tr>
<tr style="font-size: 8pt;"><td>Summe Gutscheine eingelöst: </td><td>'.number_format($gs_einlösen_zeitraum, 2, ",", ".").'&nbsp;€</td></tr>
</table>';


				
$titel = "Umsatz ".$umVon->format('d m Y').' bis '.$umBis->format('d m Y');

				
?>	
	
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Umsatz</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
	<link href="../../css/terminformular.css" rel="stylesheet">
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
  </head>
 
<body>	
<div class="titel"><p class="gross">Umsätze</p></div>
<div class="vorschau">
<table>
<tr><th class = "th_1" colspan= "4">Umsätze Übersicht</th><th></th><th class = "th_1" colspan= "4">Umsätze Summe</th></tr>
<tr><th class = "th_2" colspan = "4">Zeitraum: <?php echo $umVon->format('d.m.Y')." - ".$umBis->format('d.m.Y'); ?></th><th></th><th class = "th_2" colspan = "4"></th></tr>
<tr><td></td><td>Brutto</td><td>Netto</td><td>MwSt</td><td></td><td>Summe</td><td>Brutto</td><td>Netto</td><td>MwSt</td></tr>
<tr><td>Massagen:</td><td><?php echo number_format($massage_summe_preis, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($massage_Gesamt_Netto, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($massage_Gesamt_Mwst, 2, ",", ".")."&nbsp;€"; ?></td><td></td><td colspan= "4"></td></tr>

<tr><td>Verkauf <?php echo $mwst_fix ?> % MwSt</td><td><?php echo number_format($verkauf_fix, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($verkauf_fix_netto, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($verkauf_fix_mwst, 2, ",", ".")."&nbsp;€"; ?></td><td></td><td colspan= "4"></td></tr>

<tr><td>Verkauf <?php echo $mwst_minder ?> % MwSt</td><td><?php echo number_format($verkauf_minder, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($verkauf_minder_netto, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($verkauf_minder_mwst, 2, ",", ".")."&nbsp;€"; ?></td><td></td><td>Einnahmen</td><td><?php echo number_format($einnahme_brutto_summe, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($einnahme_netto_summe, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($einnahme_mwst_summe, 2, ",", ".")."&nbsp;€"; ?></td></tr>

<tr><td colspan="9"></td></tr>

<tr><td>Ausgaben <?php echo $mwst_fix ?> % MwSt</td><td><?php echo number_format($ausgabe_fix, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($ausgabe_fix_netto, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($ausgabe_fix_mwst, 2, ",", ".")."&nbsp;€"; ?></td><td></td><td colspan= "4"></td></tr>

<tr><td>Ausgaben <?php echo $mwst_minder ?> % MwSt</td><td><?php echo number_format($ausgabe_minder, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($ausgabe_minder_netto, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($ausgabe_minder_mwst, 2, ",", ".")."&nbsp;€"; ?></td><td></td><td colspan= "4"></td></tr>
	
<tr><td>Ausgaben 0 % MwSt</td><td><?php echo number_format($ausgabe_null_netto, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($ausgabe_null_netto, 2, ",", ".")."&nbsp;€"; ?></td><td>0&nbsp;€</td><td></td><td>Ausgaben</td><td><?php echo number_format($ausgabe_brutto_summe, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($ausgabe_netto_summe, 2, ",", ".")."&nbsp;€"; ?></td><td><?php echo number_format($ausgabe_mwst_summe, 2, ",", ".")."&nbsp;€"; ?></td></tr>	
</table>	

<p>&nbsp;</p>
<div class="pdf">
	<form action="umsatz_pdf.php" method="post">
		<input type="hidden" name="A_Z" value='<?php echo $A_Z ?>'>
		<input type="hidden" name="gs" value='<?php echo $gs_verlauf ?>'>
		<!--<input type="hidden" name="zeile_maB" value='<?php echo $zeile_maB ?>'>
		<input type="hidden" name="zeile_maC" value='<?php echo $zeile_maC ?>'>
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
<p>&nbsp;</p>	
<table>
<tr><th class = "th_1" colspan= "2">Gutscheine Übersicht</th></tr>
<tr><th class = "th_2" colspan = "2">Zeitraum: <?php echo $umVon->format('d.m.Y')." - ".$umBis->format('d.m.Y'); ?></th></tr>
<tr><td>Summe Gutscheine verkauft: </td><td><?php echo number_format($gs_ist_zeitraum, 2, ",", ".")."&nbsp;€"; ?></td></tr>
<tr><td>Summe Gutscheine eingelöst: </td><td><?php echo number_format($gs_einlösen_zeitraum, 2, ",", ".")."&nbsp;€"; ?></td></tr>
</table>

</div>

			
			
			
			
			
				
			

			
			
			