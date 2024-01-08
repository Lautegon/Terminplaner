<?php

include "php/inc/dbBenNew.php";

$kdnummer = 2311140001;

$stmt_nutzer = $dbBenNew->prepare("SELECT * FROM kundeninfo WHERE kundennummer = ?");
$stmt_nutzer->execute(array($kdnummer));


	while($row = $stmt_nutzer->fetch()) {
		$firma = $row['firma'];
		$vorname = $row['vorname'];
		$nachname = $row['nachname'];
		$gebDatum = $row['gebDatum'];
		$strasse = $row['strasse'];
		$h_nummer = $row['hausnummer'];
		$plz = $row['plz'];
		$ort = $row['ort'];
		$telefon = $row['telefon'];
		$mail = $row['mail'];
		$bankname = $row['bankname'];
		$ktnummer = $row['ktnummer'];
	}
		

if (isset($_POST['benutzer']) and $_POST['benutzer'] == 'speichern') {
	
	$firma = $_POST['firma'];
	$vorname = $_POST['vorname'];
	$nachname = $_POST['nachname'];
	$gebDatum = $_POST['gebDatum'];
	$strasse = $_POST['strasse'];
	$h_nummer = $_POST['h_nummer'];
	$plz = $_POST['plz'];
	$ort = $_POST['ort'];
	$telefon = $_POST['telefon'];
	$mail = $_POST['mail'];
	$bankname = $_POST['bankname'];
	$ktnummer = $_POST['ktnummer'];
	
	$aenderung = date('Y-m-d H:i:s');
	
	$stmt_nutzer_save = $dbBenNew->prepare("UPDATE kundeninfo SET firma =?, vorname =?, nachname =?, gebDatum =?, strasse =?, hausnummer =?, plz =?, ort =?, telefon =?, mail =?, bankname =?, ktnummer =?, aenderung =? WHERE kundennummer =? ");
	$stmt_nutzer_save->execute(array($firma, $vorname, $nachname, $gebDatum, $strasse, $h_nummer, $plz,	$ort, $telefon, $mail, $bankname, $ktnummer, $aenderung, $kdnummer));
}

?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Benutzer</title>
    <!-- Bootstrap -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/setting.css" rel="stylesheet">
	<!-- <link href="css/terminformular.css" rel="stylesheet"> -->
</head>

<body>
<div class="header">
<div class="link"><a href="Settings.php">Settings</a></div>
<div class="link"><a href="Buchungen.php">Buchungen</a></div>
<h2>Kundennummer: <?php echo $kdnummer; ?></h2>
</div>

<form action = "#" method = "post">
	<div class="u_settings">
			<div class="b_input_block">
			<label for="firma">Firma</label>
			<input type="text" name="firma" value="<?php echo $firma ?>" >
			</div>
				<div class="linie">
				<label for = "vorname">Vorname</label>
				<input type = "text" name = "vorname" value="<?php echo $vorname ?>" >
				</div>
				<div class="linie">
				<label for = "nachname">Nachname</label>
				<input type = "text" name = "nachname" value="<?php echo $nachname ?>" >
				</div>
				<div class="linie">
				<label for = "gebDatum">Geburtsdatum</label>
				<input type = "date" name = "gebDatum" value="<?php echo $gebDatum ?>" >
				</div>
			</div>

			<hr />
			
	<div class="u_settings">
		<div class="b_input_block">
			<div class="linie">
				<label for="strasse">Straße</label>
				<input type="text" name="strasse" value="<?php echo $strasse ?>" >
			</div>
			<div class="linie">
				<label for="h_nummer">Hausnummer</label>
				<input type="text" name="h_nummer" value="<?php echo $h_nummer ?>" >
			</div>
		</div>
		<div class="b_input_block">
			<div class="linie">
				<label for = "plz">PLZ</label>
				<input type = "text" name = "plz" value="<?php echo $plz ?>" >
			</div>
			<div class="linie">
				<label for = "ort">Ort</label>
				<input type = "text" name = "ort" value="<?php echo $ort ?>" >
			</div>
		</div>
	</div>
			<hr />
			
	<div class="u_settings">
			<div class="b_input_block">
				<div class="linie">
					<label for="telefon">Telefon</label>
					<input type="text" name="telefon" value="<?php echo $telefon ?>" >
				</div>
				<div class="linie">
					<label for="mail">E-Mail</label>
					<input type="email" name="mail" value="<?php echo $mail ?>" >
				</div>
			</div>
	</div>
			<hr />
			
	<div class="u_settings">
			<div class="b_input_block">
				<div class="linie">
					<label for="bankname">Geldinstitut</label>
					<input type="text" name="bankname" value="<?php echo $bankname ?>" >
				</div>
				<div class="linie">
					<label for="ktnummer">Kontonummer</label>
					<input type="text" name="ktnummer" value="<?php echo $ktnummer ?>" >
				</div>
			</div>
	</div>
			<hr />
			
		<div class="b_input_block">
			<button class="" type="submit" name="benutzer" value="speichern">Speichern</button> 
		</div>
		
</form>
</body>
</html>
			