<?php

	include "../dbNew.php";
	include "../transday.php";
	
		$start = strtotime($_POST['plan_von']);
		$stopp = strtotime($_POST['plan_bis']);
		$titel = $_POST['titel'];
		$titel_von = date("d.m.Y", $start);
		$titel_bis = date("d.m.Y", $stopp);
		$pdfName = $titel." vom ".date("d.m.Y", $start).' bis '.date("d.m.Y", $stopp).".pdf";
		//$pdfName = $titel." vom ".$titel_von." bis ".$titel_bis.".pdf";
		
			//Fortlaufende ID's aus Start,- und End-Datum Erstellen
		$umVon = new DateTime($_POST['plan_von']);
		$umBis = new DateTime($_POST['plan_bis']);
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($umVon, $interval, $umBis);
			foreach ($period as $dt) {
				$abfrage_ID = $dt->format("ymd");
				$abfrage_IDS[] = $abfrage_ID;
			}
			
					$stmt_headPers_abfrage = $dbNew->prepare("SELECT id, nickname FROM personal ORDER BY id");
					$stmt_headPers_abfrage->execute();
					$personal = $stmt_headPers_abfrage->fetchAll(PDO::FETCH_KEY_PAIR);
					

$zeile_B = '';
					
		function getSchichtplanPrint() {
		
			global $abfrage_IDS;
			global $personal;
			global $dbNew;
			global $trans;
			global $zeile_B;






	
	
			$suchVar = "";
						$stmt_schicht_abfragen = $dbNew->prepare("SELECT * from anwesenheit where (id = ? AND `0900` = 1) OR (id = ? AND `0930` = 1) OR (id = ? AND `1000` = 1) OR (id = ? AND `1030` = 1) OR (id = ? AND `1100` = 1) OR (id = ? AND `1130` = 1) OR (id = ? AND `1200` = 1) OR (id = ? AND `1230` = 1) OR (id = ? AND `1300` = 1) OR (id = ? AND `1330` = 1) OR (id = ? AND `1400` = 1) OR (id = ? AND `1430` = 1) OR (id = ? AND `1500` = 1) OR (id = ? AND `1530` = 1) OR (id = ? AND `1600` = 1) OR (id = ? AND `1630` = 1) OR (id = ? AND `1700` = 1) OR (id = ? AND `1730` = 1) OR (id = ? AND `1800` = 1) OR (id = ? AND `1830` = 1) OR (id = ? AND `1900` = 1) OR (id = ? AND `1930` = 1) OR (id = ? AND `2000` = 1) OR (id = ? AND `2030` = 1) ");
								


			foreach ($abfrage_IDS as $schicht_tag) {
					//Datum erzeugen für Schichtplanausgabe
					$tag = substr($schicht_tag, -2, 2);
					$monat = substr($schicht_tag, -4, 2);
					$jahr = "20".substr($schicht_tag, -6, 2);
					$tag_string = $jahr."-".$monat."-".$tag; //Datum als String zum Erzeugen Zeitstempel
					$ausgabe_tag = strtotime($tag_string); //Datum als Zeitstempel
					$Tag = date("l", $ausgabe_tag);			//Wochentag aus Zeitstempel
					$Tag = strtr($Tag, $trans);				//Wochentag in Deutsch
					$print_tag = date("d.m.Y", $ausgabe_tag); //Datum zur Ausgabe
					

					//Ausgabe Titel Zeilen für einen Tag
		echo "<table class = \"dienstplan\"><tr><th style = \"border: none;\"></th><th style = \"border: none;\"></th><th style = \"border: none;\"></th><th colspan = \"3\" style = \"font-size: 12pt; border: none;\">".$Tag."</th><th colspan = \"4\" style = \"font-size: 12pt; border: none;\">".$print_tag."</th></tr>
	<tr><th>Name</th><th>09:00</th><th>09:30</th><th>10:00</th><th>10:30</th><th>11:00</th><th>11:30</th><th>12:00</th><th>12:30</th><th>13:00</th><th>13:30</th><th>14:00</th><th>14:30</th><th>15:00</th><th>15:30</th><th>16:00</th><th>16:30</th><th>17:00</th><th>17:30</th><th>18:00</th><th>18:30</th><th>19:00</th><th>19:30</th><th>20:00</th><th>20:30-21:00</th></tr>";
	
					//Ausgabe in Variablen für PDF Speichern
		$th = '<tr><th style="border: none; width: 6%;"> </th><th style = "border: none; font-size: 8pt; width: 11.4%">'.$Tag.'</th><th style = "border: none; font-size: 8pt; width: 11.4%">'.$print_tag.'</th><th style="width: 71.2%;"> </th></tr><tr><th style="width: 6%;">Name</th><th style="width: 3.8%;">09:00</th><th style="width: 3.8%;">09:30</th><th style="width: 3.8%;">10:00</th><th style="width: 3.8%;">10:30</th><th style="width: 3.8%;">11:00</th><th style="width: 3.8%;">11:30</th><th style="width: 3.8%;">12:00</th><th style="width: 3.8%;">12:30</th><th style="width: 3.8%;">13:00</th><th style="width: 3.8%;">13:30</th><th style="width: 3.8%;">14:00</th><th style="width: 3.8%;">14:30</th><th style="width: 3.8%;">15:00</th><th style="width: 3.8%;">15:30</th><th style="width: 3.8%;">16:00</th><th style="width: 3.8%;">16:30</th><th style="width: 3.8%;">17:00</th><th style="width: 3.8%;">17:30</th><th style="width: 3.8%;">18:00</th><th style="width: 3.8%;">18:30</th><th style="width: 3.8%;">19:00</th><th style="width: 3.8%;">19:30</th><th style="width: 3.8%;">20:00</th><th style="width: 6.6%;">20:30-21:00</th></tr>';
		

$mA = '';


			foreach ($personal as $persid => $mitarbeiter) {
					$persidSp = sprintf("%02d", $persid);
					$speicherid = $schicht_tag.$persidSp;
					
					$suchVar = $speicherid;
					$stmt_schicht_abfragen->execute(array($suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar));
					$anwesend = $stmt_schicht_abfragen->fetchAll(PDO::FETCH_GROUP);
					
			if (isset($anwesend[$speicherid])) {						
		echo "<tr><td>".$mitarbeiter."</td>";
$mA .= '<tr><td style="font-size: 8pt">'.$mitarbeiter.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['0900'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['0930'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1000'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1030'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								//Trenner
							//echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1100'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1130'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1200'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1230'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1300'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1330'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								//Trenner
							//echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1400'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1430'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1500'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1530'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1600'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1630'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								//Trenner
							//echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1700'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1730'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1800'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1830'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1900'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1930'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								//Trenner
							//echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2000'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td>";
$mA .= '<td>'.$checked.'</td>';
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2030'] == 1) { $checked = '<img src="images/plink_checked.jpg">';} else { $checked = ''; }
							echo "<td>".$checked."</td></tr>";
$mA .= '<td>'.$checked.'</td></tr>';

			}		//If Durchlauf

			}		//Foreach Datum mit Personalnummer / ein Mitabeiter
		echo "</table>";
		echo "<p  style = \"line-height: 0.1;\">&nbsp;</p>";
//$trenner = '<p  style="line-height: 1;">&nbsp;</p>'
$zeile_B .= '<table border="1" cellpadding="1" cellspacing="0" style="width:100%; text-align:center;">'.$th.$mA.'</table><p style="font-size: 3pt;">&nbsp;</p>';
			}		//Foreach für Datum (Umgebend Mitarbeiter)


//$zeile_B = $zeile_B1;
		}		//function
		
		?>	

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Dienstplan</title>
    <!-- Bootstrap -->
	<script src="../../../js/jquery-3.5.1.min.js"></script>
	<script src="../../../js/bootstrap.min.js"></script>
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../../css/custom.css" rel="stylesheet">
	<!--<link href="css/kalender.css" rel="stylesheet">-->
	</head>
	
	<body>
					
		<div class="head"><p class="gross">Arbeitszeiten</p></div>	
			
			<?php getSchichtplanPrint(); ?>
			
		<p>&nbsp;</p>
	
<div class="pdf">
	<form action="schichtplan_pdf.php" method="post">
		<input type='hidden' name='zeile_B' value='<?php echo $zeile_B ?>'>
		<input type="hidden" name="start" value="<?php echo $start ?>">
		<input type="hidden" name="stopp" value="<?php echo $stopp ?>">
		<input type="hidden" name="titel" value="<?php echo $titel ?>">
		<input type="hidden" name="pdfName" value="<?php echo $pdfName ?>">

		<input type="submit" value="PDF speichern">
	</form>
</div>
	</body>
	</html>














					