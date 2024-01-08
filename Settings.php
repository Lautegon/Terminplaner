<?php

include "php/inc/dbNew.php";


if (isset($_POST['speichern']) and $_POST['speichern']=='jetzt') {
var_dump($_POST);

if (isset($_POST['personal']) AND $_POST['personal'] == "on") {
		$personal = 1;
	}
	else {
		$personal = 0;
	}
	
$beginn = $_POST['beginn'];
$ende = $_POST['ende'];

$zeiten = $beginn.$ende;

$platz = $_POST['plaetze'];

if (isset($_POST['maPlus']) AND $_POST['maPlus'] == "on") {
	$az_ma_termin = 1;
}
else {
	$az_ma_termin = 0;
}

$mwst_normal = $_POST['mwst_regular'];
$mwst_vermindert = $_POST['mwst_minder'];

$aw_behandlung = "";
if (isset($_POST['behandlung'])) {
	$aw_behandlung = $_POST['behandlung'];
}

$aw_mitarbeiter = "";
if (isset($_POST['mitarbeiter'])) {
	$aw_mitarbeiter = $_POST['mitarbeiter'];
}

$aw_artikel = "";
if (isset($_POST['artikel'])) {
	$aw_artikel = $_POST['artikel'];
}

$thema = 3;
if (isset($_POST['thema'])) {
	$erscheinung = $_POST['thema'];
	
echo "Personal Neu: ".$personal;
}





$stmt_setting_eintragen = $dbNew->prepare("UPDATE u_settings SET personal=?, zeiten=?, platz=?, az_ma_termin=?, mwst_normal=?, mwst_vermindert=?, aw_behandlung=?, aw_mitarbeiter=?, aw_artikel=?, erscheinung=? WHERE kundennummer=? ");
$stmt_setting_eintragen->execute(array($personal, $zeiten, $platz, $az_ma_termin, $mwst_normal, $mwst_vermindert, $aw_behandlung, $aw_mitarbeiter, $aw_artikel, $erscheinung, 1));



}

$stmt_setting_abrufen = $dbNew->prepare("Select * FROM u_settings WHERE kundennummer = 1");
$stmt_setting_abrufen->execute();


	while($row = $stmt_setting_abrufen->fetch()) {
		$personal = $row['personal'];
		$zeiten = $row['zeiten'];
		$platz = $row['platz'];
		$az_ma_termin = $row['az_ma_termin'];
		$mwst_normal = $row['mwst_normal'];
		$mwst_vermindert = $row['mwst_vermindert'];
		$aw_behandlung = $row['aw_behandlung'];
		$aw_mitarbeiter = $row['aw_mitarbeiter'];
		$aw_artikel = $row['aw_artikel'];
		$erscheinung = $row['erscheinung'];
	}
	
	//echo "<br />Personal: ".$personal."<br />Zeiten: ".$zeiten."<br />Plätze: ".$platz."<br />Zweiter Mitarbeiter: ".$az_ma_termin."<br />MwSt. Normal: ".$mwst_normal."<br />Mwst vermindert: ".$mwst_vermindert."<br />Auswahl Behandlung: ".$aw_behandlung."<br />Auswahl Mitarbeiter: ".$aw_mitarbeiter."<br />Auswahl Artikel: ".$aw_artikel."<br />Template: ".$erscheinung."<br />";
	

		
		



	

	


?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Settings</title>
    <!-- Bootstrap -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/setting.css" rel="stylesheet">
	<!-- <link href="css/terminformular.css" rel="stylesheet"> -->
</head>

<body>
<div class="link"><a href="Benutzer.php">Konto</a></div>
<div class="link"><a href="Buchungen.php">Buchungen</a></div>
<form action = "#" method = "post">
<div class="link"><button class="" type="submit" name="speichern" value="jetzt">Speichern</button></div>
	<div class="u_settings">
			<div class="input_block">
			<label for="personal">Erweiterung Personal</label>
			<input type="checkbox" name="personal" <?php if ($personal == 1) {$checked="checked";} else {$checked="";} echo $checked; ?> >
			</div>
			<hr />
			<div class="input_block">
			<p>Kernöffnungszeit ist 10:00 Uhr bis 18:00 Uhr,<br/>Zeiten von 6:00-10:00 Uhr und 18:00- 00:00 Uhr können optional Stundenweise aktiviert werden.</p>
			<label for="beginn">Beginn</label>
			<select name="beginn" size="1">
			<option value="1111" <?php if (isset($zeiten) && substr($zeiten, 0, 4) == 1111) {echo 'selected="selected"';} ?>>6 Uhr</option>
			<option value="2111" <?php if (isset($zeiten) && substr($zeiten, 0, 4) == 2111) {echo 'selected="selected"';} ?>>7 Uhr</option>
			<option value="2211" <?php if (isset($zeiten) && substr($zeiten, 0, 4) == 2211) {echo 'selected="selected"';} ?>>8 Uhr</option>
			<option value="2221" <?php if (isset($zeiten) && substr($zeiten, 0, 4) == 2221) {echo 'selected="selected"';} ?>>9 Uhr</option>
			<option value="2222" <?php if (isset($zeiten) && substr($zeiten, 0, 4) == 2222) {echo 'selected="selected"';} ?>>10 Uhr</option>
			</select>
			<p></p>
			<label for="ende">Ende</label>
			<select name="ende" size="1">
			<option value="222222" <?php if (isset($zeiten) && substr($zeiten, 4, 6) == 222222) {echo 'selected="selected"';} ?>>18 Uhr</option>
			<option value="122222" <?php if (isset($zeiten) && substr($zeiten, 4, 6) == 122222) {echo 'selected="selected"';} ?>>19 Uhr</option>
			<option value="112222" <?php if (isset($zeiten) && substr($zeiten, 4, 6) == 112222) {echo 'selected="selected"';} ?>>20 Uhr</option>
			<option value="111222" <?php if (isset($zeiten) && substr($zeiten, 4, 6) == 111222) {echo 'selected="selected"';} ?>>21 Uhr</option>
			<option value="111122" <?php if (isset($zeiten) && substr($zeiten, 4, 6) == 111122) {echo 'selected="selected"';} ?>>22 Uhr</option>
			<option value="111112" <?php if (isset($zeiten) && substr($zeiten, 4, 6) == 111112) {echo 'selected="selected"';} ?>>23 Uhr</option>
			<option value="111111" <?php if (isset($zeiten) && substr($zeiten, 4, 6) == 111111) {echo 'selected="selected"';} ?>>0 Uhr</option>
			</select>
			<hr>
			
			<div class="input_block">
			<p>Im Standard werden 6 Plätze zur Terminbuchung angezeigt,<br/>Sie können diese Anzeige auf bis zu 12 Plätze erweitern.</p>
			<label for="plaetze">Behandlungsplätze</label>
			<select name="plaetze" size="1">
			<option value="5" <?php if (isset($platz) && $platz == 5) {echo 'selected="selected"';} ?>>5 Plätze</option>
			<option value="6" <?php if (isset($platz) && $platz == 6) {echo 'selected="selected"';} ?>>6 Plätze</option>
			<option value="7" <?php if (isset($platz) && $platz == 7) {echo 'selected="selected"';} ?>>7 Plätze</option>
			<option value="8" <?php if (isset($platz) && $platz == 8) {echo 'selected="selected"';} ?>>8 Plätze</option>
			<option value="9" <?php if (isset($platz) && $platz == 9) {echo 'selected="selected"';} ?>>9 Plätze</option>
			<option value="10" <?php if (isset($platz) && $platz == 10) {echo 'selected="selected"';} ?>>10 Plätze</option>
			<option value="11" <?php if (isset($platz) && $platz == 11) {echo 'selected="selected"';} ?>>11 Plätze</option>
			<option value="12" <?php if (isset($platz) && $platz == 12) {echo 'selected="selected"';} ?>>12 Plätze</option>
			</select>
			</div>
			<hr>
			
			<div class="input_block">
			<p>Wählen sie hier ob ein zweiter Mitarbeiter auf den Termin gebucht werden kann.</p>
			<label for="maPlus">Zweiter Mitarbeiter</label>
			<input type="checkbox" name="maPlus" <?php if ($az_ma_termin == 1) {$checked="checked";} else {$checked="";} echo $checked; ?>>
			</div>
			<hr>
			
			<div class="input_block">
			<p> 
			Geben sie die Mehrwertssteuerersätze für reguläre und verminderte MwSt. an,</p>
			<label for="regular">MwSt. regulär</label>
			<input type="number" name="mwst_regular" value="<?php if (isset($mwst_normal)) {echo $mwst_normal;} ?>" >
			<label for="minder">MwSt. vermindert</label>
			<input type="number" name="mwst_minder" value="<?php if (isset($mwst_vermindert)) {echo $mwst_vermindert;} ?>">
			</div>
			<hr>
			
			<div class="input_block">
			<p>Geben sie hier die Namen der Behandlungen ein die in der Auswahlliste erscheinen sollen.<br/>
			Geben sie jeweils einen Begriff pro Behandlung ein und trennen sie diese mit einem Semiklon und darauf folgende Leerzeichen.</p>
			<p> Beispiel: Behandlung 1; Behandlung 2; Behandlung 3; usw.</p>
			<label for="behandlung">Behandlungen</label>
			<textarea type="text" name="behandlung" rows="3" cols="30"><?php if (isset($aw_behandlung)) {echo $aw_behandlung;} ?></textarea>
			</div>
			<hr>
			
			<div class="input_block">
			<p>Geben sie hier die Namen der Mitarbeiter ein die in der Auswahlliste erscheinen sollen.<br/>
			Geben sie jeweils einen Namen ein und trennen sie diese mit einem Semiklon und darauf folgende Leerzeichen.</p>
			<p> Beispiel: Mitarbeiter 1; Mitarbeiter 2; Mitarbeiter 3; usw.</p>
			<label for="mitarbeiter">Mitarbeiter</label>
			<textarea type="text" name="mitarbeiter" rows="3" cols="30"><?php if (isset($aw_mitarbeiter)) {echo $aw_mitarbeiter;} ?></textarea>
			</div>
			<hr>
			
			<div class="input_block">
			<p>Geben sie hier Artikel ein die in der Auswahlliste zum "Artikel Barverkauf" erscheinen sollen.<br/>
			Geben sie jeweils einen Artikel ein und trennen sie diesen mit einem Semiklon und darauf folgende Leerzeichen.</p>
			<p> Beispiel: Gutschein; Arttikel 1; Artikel 2; usw.</p>
			<label for="artikel">Artikel Barverkauf</label>
			<textarea type="text" name="artikel" rows="3" cols="30"><?php if (isset($aw_artikel)) {echo $aw_artikel;} ?></textarea>
			</div>
			<hr>
			
			<div class="input_block">
			<p>Hier können sie das Erscheinungsbild ihres Terminplaners wählen.</p>
			<label for="thema">Thema</label>
			<select name="thema" size="1">
			<option value="1">Hell</option>
			<option value="2">Dunkel</option>
			<option value="3">Farbig</option>
			</select>
			</div>
			<hr>
			
			
			
			
			
			
		</div>
	</div>
			
			
	
</form>
</body>
</html>
			