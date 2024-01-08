<?php


?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Stammdaten Eingebn</title>
    <!-- Bootstrap -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../css/custom.css" rel="stylesheet">
	<link href="../../../css/kalender.css" rel="stylesheet">
	<link href="../../../css/terminformular.css" rel="stylesheet">
	<script src="../../../js/jquery-3.5.1.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
	
<?php	

	include "../dbNew.php";
	
		$persnr = $_GET['persnr'];
			$stmt_stammdaten_abfrage = $dbNew->prepare("SELECT vorname, nachname, nickname, urlaubsansp, urlakt FROM personal WHERE id =?");
			$stmt_stammdaten_abfrage->bindParam(1, $persnr);
			$stmt_stammdaten_abfrage->execute();
			$stammdaten = $stmt_stammdaten_abfrage->fetch();
			//var_dump($stammdaten);
				$vorname = $stammdaten['vorname'];
				$nachname = $stammdaten['nachname'];
				$nickname = $stammdaten['nickname'];
				$urlaubsansp = $stammdaten['urlaubsansp'];
				$urlakt = $stammdaten['urlakt'];

	if (isset($_POST['fehl_aktion']) AND $_POST['fehl_aktion'] == "fehl_speichern") {
		include "fehlzeiten_form_arbeit.php";
	}
?>
  </head>
 
<body>
<div class="headline"><h2>Mitarbeiter</h2></div>
		
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
			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile3">
						<label for="vorname">Vorname</label>
							<input type="text" name="vorname" value="<?php echo $vorname; ?>" readonly>
					</div>
					<div class="zeile3">
						<label for="nachname">Nachname</label>
							<input type="text" name="nachname" value="<?php echo $nachname; ?>" readonly>
					</div>
					<div class="zeile3">
						<label for="nickname">Nickname</label>
							<input type="text" name="nickname" value="<?php echo $nickname; ?>" readonly>
					</div>
				</div>
			</div>

			<div class="inputgroup">
				<div class="innerP">
					<div class="zeile1">
						<label for="urlaubsansp">Urlaub/Jahr Tage</label>
						<input type="text" name="urlaubsansp" value="<?php echo $urlaubsansp; ?>" readonly>
					</div>
					<div class="zeile1">
						<label for="urlaubsansp">Urlaub/Akt Tage</label>
						<input type="text" name="urlaubakt" value="<?php echo $urlakt; ?>" readonly>
					</div>
				</div>
			</div>					
	<div class="headline"><h2>Urlaub - Krankheit Eintragen</h2></div>
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

						<input type="hidden" name="fehl_id" value="<?php echo $persnr; ?>">
						<input type="hidden" name="fehl_nick" value="<?php echo $nickname; ?>">
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