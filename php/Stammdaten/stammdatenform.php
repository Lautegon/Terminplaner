<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Stammdaten Eingebn</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
	<link href="../../css/terminformular.css" rel="stylesheet">
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
  </head>
 
<body>
<?php
	include "stammdaten_form_arbeit.php";
	if (isset($_POST['fehl_aktion']) AND $_POST['fehl_aktion'] == "fehl_speichern") {
		include "fehlzeiten_form_arbeit.php";
	}
	
?>
<div class="headline"><h2>Mitarbeiter Anlegen / Ändern</h2>
						<p>Hier Personaladaten eintragen / ändern und Speichern:</p></div>
	<div id="tok" class="terminok">
		<h1>Mitarbeiter Angelegt!</h1>
	</div>
	<div id="tgeae" class="terminok">
		<h1>Mitarbeiter Geändert!</h1>
	</div>
	<div id="fehl_in" class="terminok">
		<h1>Abwesenheit Eingetragen!</h1>
	</div>
	<div class="maEingabe">
		<form action="#" method="post">
			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile3">
						<label for="vorname">Vorname</label>
							<input type="text" name="vorname" value="<?php if (isset($vorname_ist)) {echo $vorname_ist;} ?>" required>
					</div>
					<div class="zeile3">
						<label for="nachname">Nachname</label>
							<input type="text" name="nachname" value="<?php if (isset($nachname_ist)) {echo $nachname_ist;} ?>" required>
					</div>
					<div class="zeile3">
						<label for="nickname">Nickname</label>
							<input type="text" name="nickname" value="<?php if (isset($nickname_ist)) {echo $nickname_ist;} ?>" required>
					</div>
				</div>
			</div>
				<div class="inputgroup">
				<div class="innerP">
					<div class="zeile3">
						<label for="anschrift">Anschrift</label>
							<input type="text" name="anschrift" value="<?php if (isset($anschrift_ist)) {echo $anschrift_ist;} ?>" required>
					</div>
					<div class="zeile3">
						<label for="plz">PLZ</label>
							<input type="text" name="plz" value="<?php if (isset($plz_ist)) {echo $plz_ist;} ?>" required>
					</div>
					<div class="zeile3">
						<label for="ort">Ort</label>
							<input type="text" name="ort" value="<?php if (isset($ort_ist)) {echo $ort_ist;} ?>" required>
					</div>
				</div>
			</div>
			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile3">
						<label for="sozvers">Soz.Vers.Nr</label>
							<input type="text" name="sozvers" value="<?php if (isset($sozversnr_ist)) {echo $sozversnr_ist;} ?>">
					</div>
					<div class="zeile3">
						<label for="mail">E-Mail</label>
							<input type="text" name="mail" value="<?php if (isset($mail_ist)) {echo $mail_ist;} ?>">
					</div>
					<div class="zeile3">
						<label for="tel">Tel.</label>
							<input type="text" name="tel" value="<?php if (isset($telefon_ist)) {echo $telefon_ist;} ?>">
					</div>
				</div>
			</div>
			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile3">
						<label for="gebdatum">Geburtsdatum</label>
							<input type="date" name="gebdatum" value="<?php if (isset($geburtsdatum_ist)) {echo $geburtsdatum_ist;} ?>">
					</div>
					<div class="zeile3">
						<label for="datein">Datum Eintritt</label>
							<input type="date" name="datein" value="<?php if (isset($eintritt_ist)) {echo $eintritt_ist;} ?>">
					</div>
	
					<div class="zeile3">
						<label for="dateout">Datum Austritt</label>
							<input type="date" name="dateout" value="<?php if (isset($austritt_ist)) {echo $austritt_ist;} ?>">
					</div>
				</div>
			</div>
			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile3">
						<label for="monatStd">Stunden / Woche</label>
							<input type="text" name="monatStd" value="<?php if (isset($arbeitszeit_ist)) {echo $arbeitszeit_ist;} ?>">
					</div>
					<div class="zeile3">
						<label for="lohn">Stundenlohn</label>
							<input type="text" name="lohn" value="<?php if (isset($stundenlohn_ist)) {echo $stundenlohn_ist;} ?>">
					</div>
					<div class="zeile3">
						<label for="status">Vertragsart</label>
							<input type="text" name="status" value="<?php if (isset($status_ist)) {echo $status_ist;} ?>">
					</div>
				</div>
			</div>
			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile1">
						<label for="urlaubsansp">Urlaub/Jahr Tage</label>
						<input type="text" name="urlaubsansp" value="<?php if (isset($urlaubsansp_ist)) {echo $urlaubsansp_ist;} ?>">
					</div>
					<div class="zeile1">
						<label for="urlaubakt">Urlaub/Akt Tage</label>
						<input type="text" name="urlaubakt" value="<?php echo $urlakt; ?>" readonly>
					</div>
				</div>
			</div>	
							<input type="hidden" name="aktion" value="speichern">
			<div class="inputgroup">
				<div class="form_1">
					<input type="submit" value="Mitarbeiter speichern">
					<input type="button" onclick="window.close( 'return false')"; value="Abbrechen">
				</div>
			</div>
		</form>
	</div>	
	<div class="headline"><h2>Urlaub - Krankheit Eintragen</h2>
	</div>
	<form action="#" method="post">
	<div class="inputgroup">
		<div class="innerP">
			<div class="zeile2">
				<label for="fehl_von">Abwesend ab</label>
					<input type="date" name="fehl_von" required>
			</div>
		</div>
		<div class="innerP">
			<div class="zeile2">
				<label for="fehl_bis">Abwesend bis</label>
					<input type="date" name="fehl_bis" required>
			</div>
		</div>
		<div class="innerP">
			<div class="zeile2">
				<label for="fehl_art">Abwesend Art</label>
					<select class="pers" name="fehl_art" size="1" required>
						<option></option>
						<option>Urlaub</option>
						<option>Krank</option>
						<option>sonstiges</option>
					</select>
			</div>
		</div>
	</div>
	<div class="inputgroup">
		<div class="innerP">
			<div class="zeile2">
				<label for="u_tg">Urlaub Tage</label>
					<input type="text" name="u_tg">
			</div>
		</div>
			<div class="zeile2">
				<label for="fehl_info">Abwesend Info</label>
					<textarea name="fehl_info" cols="40" rows="2"></textarea>      
			</div>
	</div>

						<!--<input type="hidden" name="dbWertFehl" value="F">--> 
						<input type="hidden" name="fehl_id" value="<?php echo $persnr; ?>">
						<input type="hidden" name="fehl_nick" value="<?php echo $nickname_ist; ?>">
						<input type="hidden" name="fehl_aktion" value="fehl_speichern">
	<div class="inputgroup">
		<div class="form_1">
				<input type="submit" value="Zeiten speichern">
				<input type="button" onclick="window.close( 'return false')"; value="Abbrechen">
		</div>
	</div>
</form>

</body>
</html>