<?php
	if (isset($_POST['suchen']) && $_POST['suchen'] == 'ja') {
			if (isset($_POST['nachname']) AND $_POST['nachname'] != '') {
				$nachname = trim($_POST['nachname']);
			$Snachname = "%".$nachname."%";

			}
			else {
				$Snachname = '';
			}
			$Smail = 'NULL';
			if (isset($_POST['mail'])) {
				$Smail = trim($_POST['mail']);

			}
			$Stelefon = 'Null';
			if (isset($_POST['telefon'])) {
				$Stelefon = trim($_POST['telefon']);

			}
			
	include "../inc/dbNew.php";

		$stmt_kunden = $dbNew->prepare("SELECT id, vorname, nachname, massageart, dauer, masseurin_1, masseurin_2 FROM buchungen WHERE (nachname LIKE ?) OR (mail = ? AND mail != '') OR (telefon = ? AND telefon != '') ORDER BY id DESC ");
		$stmt_kunden->execute(array($Snachname, $Smail, $Stelefon ));
		$Kunde = $stmt_kunden->fetchAll(PDO::FETCH_GROUP);
		
		$stmt_kunden_st = $dbNew->prepare("SELECT id_st, vorname_st, nachname_st, massage_st, mail_st, telefon_st, stornogrund FROM storno WHERE (nachname_st LIKE ?) OR (mail_st = ? AND mail_st != '') OR (telefon_st = ? AND telefon_st != '') ORDER BY id_st DESC ");
		$stmt_kunden_st->execute(array($Snachname, $Smail, $Stelefon ));
		$Kunde_st = $stmt_kunden_st->fetchAll(PDO::FETCH_GROUP);
		
	
	
function getKundensuche () {
	global $Kunde;
	global $Kunde_st;
	
		echo "<tr><th>Datum</th><th>Uhzeit</th><th>Raum Nr.:</th><th>Vorname</th><th>Nachname</th><th>Dauer</th><th>Massage</th><th>Mass. 1</th><th>Mass. 2</th></tr>";
		
		foreach($Kunde AS $key => $value) {
			// Datum / Raum / Zeit aus id 
			$jahr = "20".substr("$key", 0, 2);
			$monat = substr("$key", 2, 2);
			$tag = substr("$key", 4, 2);
			$raum = substr("$key", 6, 1);
			$stunde = substr("$key", 7, 2);
			$minute = substr("$key", 9, 2);
		
			echo "<tr><td>".$tag.".".$monat.".".$jahr."</td><td>".$stunde.":".$minute."</td><td>".$raum."</td><td>".$value[0]['vorname']."</td><td>".$value[0]['nachname']."</td><td>".$value[0]['dauer']."</td><td>".$value[0]['massageart']."</td><td>".$value[0]['masseurin_1']."</td><td>".$value[0]['masseurin_2']."</td></tr>";
		}
		
			echo "<tr><td colspan='9'> </td></tr>
			<tr><th colspan='9' style='color: red; font-size: 12px; font_weight: 400;'>Stornierte Termine</th></tr>";
		
		foreach($Kunde_st AS $key_st => $value_st) {
			// Datum / Raum / Zeit aus id 
			$jahr_st = "20".substr("$key_st", -10, 2);
			$monat_st = substr("$key_st", -8, 2);
			$tag_st = substr("$key_st", -6, 2);
			$stunde_st = substr("$key_st", -4, 2);
			$minute_st = substr("$key_st", -2, 2);
			
			echo "<tr><td>".$tag_st.".".$monat_st.".".$jahr_st."</td><td>".$stunde_st.":".$minute_st."</td><td> </td><td>".$value_st[0]['vorname_st']."</td><td>".$value_st[0]['nachname_st']."</td><td> </td><td>".$value_st[0]['massage_st']."</td><td colspan='2'>".$value_st[0]['stornogrund']."</td></tr>";
		}
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
    <title>Kundensuche</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
	<link href="../../css/terminformular.css" rel="stylesheet">
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>

 </head>
 <body>
	<div id="eintragen">
	<form action="#" method="post">
		<div class="inputgroup">
			<div class="nachname">
				<label for="nachname">Nachname</label>
				<input type="text" name="nachname">
			</div>
		</div>
		<div class="inputgroup">
			<div class="mail">
				<label for="mail">E-Mail</label>
				<input type="email" name="mail">
			</div>
			<div class="tel">
				<label for="telefon">Telefon</label>
				<input type="tel" name="telefon">
			</div>
		</div>
		<div class="inputgroup">
			<input type="hidden" name="suchen" value="ja">
			<input class="suchen" type="submit" value="Suchen"><input class="suchen" type="button" onclick="window.close( 'return false')"; value="Schließen">
		</div>
	</div>
	</form>
	
	<div class="barverkauf">
		<table class="barverkauf">
			<?php
					if (isset($_POST['suchen']) && $_POST['suchen'] == 'ja') {
						getKundensuche();
					}
					?>
		</table>
	</div>
</body>
</html>