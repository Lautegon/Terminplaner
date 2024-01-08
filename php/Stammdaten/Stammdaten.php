<?php
		
		include "stammdaten_fehlzeiten_abfragen.php";
		include "../inc/dbNew.php";
		
		$stmt_personal_abfragen = $dbNew->prepare("SELECT * from personal");
		$stmt_personal_abfragen->execute();
		$stammdaten = $stmt_personal_abfragen->fetchAll(PDO::FETCH_ASSOC);
		//print_r($stammdaten);
		
		$stammdatenHead = array('Pers. Nr.', 'Nick', 'Name', 'Geburtsdatum', 'Adresse', 'Ort', 'Telefon', 'E-Mail', 'Std./Wo', '€/Std.', 'Url./Ansp.', 'Url./Akt.', 'Datum Eintritt', 'Datum Austritt',  'Status', 'Soz Vers. Nr.'); 
		
		function getStammdaten($stammdatenHead) {
			
			global $stammdaten;
			
			echo "<table><tr>";
				foreach ($stammdatenHead as $key => $value) {
					echo "<th>".$value."</th>";
				}
				echo "</tr><tr>";
					foreach ($stammdaten as $key => $daten) {
						
						
						
							$gebDat = date("d.m.Y", strtotime($daten['geburtsdatum']));
							$einDat = date("d.m.Y", strtotime($daten['eintritt']));
					If ($daten['austritt'] == "0000-00-00") {
						$ausDat = "";
					}
					else {
							$ausDat = date("d.m.Y", strtotime($daten['austritt']));
					}
						
						echo "<td><a href=\"#\" onclick= \"window.open('stammdatenform.php?persnr=".$daten['id']."','Fehlzeiteneingabe','width=800,height=850,scrollbars=no,rezsizeable=yes,status=yes');\">".sprintf("%02d", $daten['id'])."</a></td><td>".$daten['nickname']."</td><td>".$daten['vorname']." ".$daten['nachname']."</td><td>".$gebDat."</td><td>".$daten['anschrift']."</td><td>".$daten['plz']." ".$daten['ort']."</td><td>".$daten['telefon']."</td><td>".$daten['mail']."</td><td>".$daten['arbeitszeit']."</td><td>".$daten['stundenlohn']."</td><td>".$daten['urlaubsansp']."</td><td>".$daten['urlakt']."</td><td>".$einDat."</td><td>".$ausDat."</td><td>".$daten['status']."</td><td>".$daten['sozversnr']."</td></tr>";
					}
				echo "</table>";
		}
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Stammdaten</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
	<link href="../../css/terminformular.css" rel="stylesheet">
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
  </head>
 
<body>

	<div class="persplan">
		<div class="innerP">
				<p class="gross">Personal Stammdaten</p><p class="gross">&nbsp;</p>
				<div class="menue_inline">
					<div class="link"><a href="#" onclick= "window.open('stammdatenform.php','Stammdateneingabe_Neu','width=800,height=850,scrollbars=no,rezsizeable=yes,status=yes');">Neuer Mitarbeiter</a></div>
					<div class="link"><a href="../../Buchungen.php">Buchungen</a></div>
					<div class="link"><a href="../../Personal.php">Personal</a></div>
					</div>
		</div>

		<div class="aufzaehlung"><?php getStammdaten($stammdatenHead); ?></div>
	</div>
	
	<div class="persplan">
		<div class="head"><p class="gross">Personal Fehlzeiten</p></div>
		<div class="aufzaehlung">
			<table class="schichtplan">
			<?php getAbwesenheit($fehl_Head); ?>		<!--stammdaten_fehlzeit_abfragen.php-->
		</table>
		</div>
	</div>
	
</body>
</html>
