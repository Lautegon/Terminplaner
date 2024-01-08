<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

	$tagesid = $_GET['tagesid'];
	$datumBar = strtotime($_GET['tagaktuell']);
	$datumBarNeu =date("d.m.Y", $datumBar);
	$datumBelege = date("ymd", $datumBar);
	
		// Variablen für pattern
	$szTitel = "bitte kein ' < > # $ ;";
	$szPattern ="[! &quot%&()+,-./0-:=?@A-Za-zÄÜÖäüö]*";
	
include "../../dbNew.php";
		// Abfrage Wechselgeld / Startkasse
	$stmt_wechselgeld = $dbNew->prepare("SELECT preis FROM kassenstand WHERE tagesid =? AND wert =?");
	$stmt_wechselgeld->execute(array($tagesid, "startKasse"));
	$startDa = $stmt_wechselgeld->rowCount();
	$wechselgeld = $stmt_wechselgeld->fetchAll();
	
	//echo "Anzahl Einträge Wechselgeld: ".$startDa."<br />";
	foreach ($wechselgeld AS $kasseStart) {
		$startKasse = $kasseStart['preis'];
	}
	//echo "Wechselgeld: ".$startKasse."<br />";
	
	If ($startDa == 0) {
		$anzeigeWechsel = 1;
	}
	else {
		$anzeigeWechsel = 0;
	}


include "barverkauf_arbeit.php";
include "../../../../set.php";

?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Barverkauf</title>
    <!-- Bootstrap -->
    <link href="../../../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../../css/custom.css" rel="stylesheet">
	<link href="../../../../css/kalender.css" rel="stylesheet">
	<link href="../../../../css/terminformular.css" rel="stylesheet">
	<script src="../../../../js/jquery-3.5.1.min.js"></script>
	<script src="../../../../js/bootstrap.min.js"></script>
  </head>
 
<body>
<!-- Button Kassensturz Tageseinnahmen -->

<div class ="inputgroup">
<div class="innerP">
<div class="zeile3"><button class="suchen" href="#" onclick="window.open('kassensturz.php?tagesid=<?php echo $tagesid ?>&tagaktuell=<?php echo $datumBarNeu ?>','kassensturz','width=700,height=950,scrollbars=no,rezsizeable=yes,status=yes');">Tageskasse</button></div>
<?php If ($anzeigeWechsel == 1) {
	echo '<div id ="we" class ="form_1">
		<form action="#" method="post">
				<input type="hidden" name="wechselgeld" value="einzahlen">
				<input type="hidden" name="tagesid" value="<?php echo $tagesid ?>">
				<label for="kasseStart">Wechselgeld Kasse Start € </label>
				<input type="number" class="input_number" name="startGeld" min="0" step="0.01" required>
				<input class="termform" type="submit" value="Speichern">
		</form>
	</div>';
}
else {
	echo '<div class="form_1">
		<p class="th_1">Kassenstart: '.$startKasse.' € Wechselgeld</p>
	</div>';
}
?>
	</div>
</div>

			

<div class="headline"><h2>Barverkauf am <?php echo $datumBarNeu ?></h2></div>

<!-- Fehlermeldungen für falsche Gutscheinnummer oder Wert! JS ist in Variablen gespeichert -->
<?php echo $nummer_falsch.$gs_minus.$gutscheinnr ?>
				<div id="nrfalsch" class="terminok">
					<h1><span style="color: #FF0000">Gutschein nicht vorhanden!</span></h1>
				</div>
				<div id="gsminus" class="terminok">
					<h1><span style="color: #FF0000">Gutschein Wert zu wenig!</span></h1>
				</div>
				<div id="nummerplus" class="terminok">
					<h1><span style="color: #FF0000">Gutscheinnummer schon vorhanden!</span></h1>
				</div>

	
	<div class="maEingabe">
		<form action="#" method="post">
		<input type="hidden" name="barverkauf" value="buchen">
		<input type="hidden" name="tagesid" value="<?php echo $tagesid ?>">
			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile3normal">
						<label for="artikel">Artikel</label>
							<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" list="artikel" name="artikel" size="1">
								<datalist id="artikel">
								<?php echo $liste_art ?>
								<!--<option>Gutschein</option>
								<option>Tee</option>
								<option>Buch</option>-->
							</datalist>
					</div>
					<div class="zeile3normal">
						<label for="wert">Wertung</label>
							<select name="wert" size="1">
								<option>Einnahme</option>
								<option>Ausgabe</option>
								<option class="verm">Einnahme -%</option>
								<option class="verm">Ausgabe -%</option>
								<option class="verm">Ausgabe 0%</option>
							</select>
					</div>
					<div class="zeile3klein">
					<label for="artikelpreis">Preis €</label>
					<input type="number" class="input_number" name="artikelpreis" min="0" step="0.01">
					</div>
					<div class="zeile3gross">
					<table class="formular">
					<tr><th class="formular">nächste GS. Nr.</th></tr>
					<!--Version auch eigene Gutscheinnummer eingeben -->
					<tr><td class="formular"><input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="gs_nr" list="gs_nr" size="3">
									<datalist id="gs_nr">
									<option><?php echo $gs_nr_neu; ?></option>
									</datalist></td></tr>
					<!-- Version nur vorgefertigte Gutscheinnummer 
					<tr><td class="formular"><input type="text" name="gs_nr" value="<?php echo $gs_nr_neu; ?>" readonly></td></tr>-->
					</table>
					</div>
					<div class="zeile3gross">
					<table class="formular">
					<tr><th class="formular" colspan="2">nächste Blg. Nr.</th></tr>
					<tr><td class="formular"><input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="a_nr" value="<?php echo $a_nr_neu; ?>" readonly></td></tr>
					</table>
					</div>
					</div>
					</div>
		<div class="inputgroup">
			<div class="innerP">
				<div class="bar_bes">
					<label for="bar_bes">Info</label>
						<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="bar_bes" rows="1" cols="50" wrap="soft"></input>
				</div>
				<div class="bar_uew">
					<label for="bar_uew">Mit Überweisung</label>
					<div class="uew_2">
						<input type="checkbox" name="bar_uew" value="ja">
						<p class="ec"> </p>
					</div>
				</div>
			</div>
		</div>

			<div class="inputgroup">
				<div class="form_1">
					<input class="suchen" type="submit" value="Speichern">
					<input class="suchen" type="button" onclick="window.close( 'return false')"; value="Schließen">
				</div>
				</div>
		</form>
		
		<!-- Einnahmen aus Gutscheinwert -->
		<div class="headline"><h2>Barverkauf Gutschein</h2></div>
		
		<div class="gutschein_bar">
				<form action="#" method="post">
		<input type="hidden" name="gs_verkauf" value="gs_buchen">
		<input type="hidden" name="gs_tagesid" value="<?php echo $tagesid ?>">
			<div class="inputgroup_terminform">
					<div class="zeile3normal">
						<label for="artikel">Artikel</label>
							<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" list="gs_artikel" name="gs_artikel" size="1" required>
							<datalist id="gs_artikel">
								<option class="gs_datalist">Gutschein</option>
								<option class="gs_datalist">Trinkgeld</option>
								<?php echo $liste_art ?>
								<!--<option>Tee</option>
								<option>Buch</option>-->
							</datalist>
					</div>
					<div class="zeile3normal">
						<label for="gs_wert">Wertung</label>
							<select name="gs_wert" size="1">
								<option>GS Einlösen</option>
								<option>Trinkgeld</option>
								<option class="verm">GS Einlösen -%</option>
							</select>
					</div>
					<div class="preis">
					<label for="artikelpreis">Preis €</label>
					<input type="number" class="input_number" name="gs_artikelpreis" min="0" step="0.01" required>
					</div>
					<div class="gutschein_nr">
					<label class="terminform_1" for="gs_en_nr">Gutschein Nr.</label>
					<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="gs_en_nr" required>
					</div>
					</div>
					
		<div class="inputgroup">
			<div class="innerP">
				<div class="bar_bes">
					<label for="bar_bes">Info</label>
						<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="gs_bes" rows="1" cols="50" wrap="soft"></input>
				</div>

			</div>
		</div>
					
					<div>
					<input class="termform" type="submit" value="Speichern">
					</div>
					
				</div>
			</form>
		</div>

		
		
<p>&nbsp;</p>
		<div class="barverkauf">
				<?php If (!empty($einnahme_bar OR $einnahme_gs OR $einnahme_uew)) {
					getVerkauf();
				}
				else {
					echo 'Keine Umsätze im Verkauf';
				} ?>
		</div>
<p>&nbsp;</p>
		<div class="barverkauf">
				<?php If (!empty($massage_gs OR $massage_uew)) {
					getMassage();
				}
				else {
					echo 'Keine Anwendungen mit Gutschein oder Überweisung!';
				} ?>
		</div>
<p>&nbsp;</p>
		<div class="barverkauf">
				<?php If (!empty($ausgaben)) {
					getAusgaben();
				}
				else {
					echo 'Keine Ausgaben!';
				} ?>
		</div>
<p>&nbsp;</p>
		<div class="barverkauf">
				<?php If (!empty($storno_verkauf_bar OR $storno_verkauf_gs OR $storno_verkauf_uew OR $storno_massagen_gs OR $storno_massagen_uew OR $storno_ausgaben)) {
					getStorno();
				}
				else {
					echo 'Keine Stornierungen!';
				} ?>
		</div>
</div>


</body>
</html>