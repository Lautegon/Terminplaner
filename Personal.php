<?php

include "php/inc/transday.php";				//Wochentage Englisch --> Deutsch
include "php/inc/Personal/kalender_personal.php";		//Kalender Steuerung Ausgeben

		//TagesId ermitteln
$tgdate = time();
	if (isset($_GET['tagesid']) && !empty($_GET['tagesid'])){
						$tagesid = $_GET['tagesid'];
						$jaHr = substr($tagesid,-6,2);
						$mO = substr($tagesid,-4,2);
						$tG = substr($tagesid,-2,2);
						$daTum = $tG.".".$mO.".20".$jaHr;
						$tag_stempel = "20".$jaHr."-".$mO."-".$tG;
								//echo $tag_stempel;
						$ausGabeTag = strtotime($tag_stempel);
								//echo $ausGabeTag;
						$Tag = date("l", $ausGabeTag);
						$Tag = strtr($Tag, $trans);
						//echo $Tag."<br /><br /><br />";
						
					} 
			else {
						$tagesid = date("y",$tgdate).date("m",$tgdate).date("d",$tgdate);
						$daTum = date("d",$tgdate).".".date("m",$tgdate).".".date("Y",$tgdate);
								$Tag = date("l", $tgdate);
						$Tag = strtr($Tag, $trans);
						//echo $Tag."<br /><br /><br />";
					}
		//echo $tagesid;
		
		//Einträge für Anwesenheit speichern
	if (isset($_POST['az_aktion']) and $_POST['az_aktion'] =='az_speichern') {
		include "php/inc/Personal/az_speichern.php";
		}

		//Datum einen Tag vor oder zurück Scrollen
		 include "php/inc/tagscroll.php";
		
		// Abfrage Schichtplan / Ausgabe der Schichtplan Form  /  Tabelle  
		 include "php/inc/Personal/pers_plan_form.php";
		
		//Abfrage und Ausgabe der Fehlzeiten aus DB fehlzeiten / Script Fehlzeiten löschen
		 include "php/inc/Personal/fehlzeit_abfragen.php";
		

?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Personal</title>
    <!-- Bootstrap -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/custom.css" rel="stylesheet">
	<link href="css/kalender.css" rel="stylesheet">
	<script>
function getElemente(klassenname, tagname, el) {
	var alle = document.getElementsByName(tagname);
	/*alert("Das ist alle: " + alle);*/
		var elemente = [];
		for(var i = 0; i < alle.length; i++) {
			var element = alle[i];
	function isMitglied(element, klassenname) {
		var klassen = element.className;
			if(klassen == klassenname) return true;
			}
				if(isMitglied(element, klassenname))
					elemente.push(element);
					}
			/*alert("Das ist elemente: " + elemente);*/
 var box = elemente;
 if (!box.length) box.checked = el.checked; else 
 for (var i = 0; i < box.length; i++) {
  box[i].checked = el.checked;
}
}
</script>
  </head>
 
<body>
	<div class="header">
		<div id="kalender">
		
				<!--Kalender Steuerung-->					
		<div class="steuerung">
			<a href="?timestamp=<?php echo yearBack($date); ?>" class="last">&laquo;</a> 
			<a href="?timestamp=<?php echo monthBack($date); ?>" class="last">&lsaquo;</a> 
				<div class="pagihead">
					<span><?php echo $arrMonth[date('F',$date)];?> <?php echo date('Y',$date); ?></span>
				</div>
			<a href="?timestamp=<?php echo monthForward($date); ?>" class="last">&rsaquo;</a>
			<a href="?timestamp=<?php echo yearForward($date); ?>" class="last">&raquo;</a>  
		</div>

				<?php getCalender($date,$headline); ?>			<!-- Kalender generieren --><!-- kalender.php-->
		<div class="clear"></div>
	</div>
	
	
		<!-- Menue -->
	<div id="kalender_menue">
		<div class="menue">
			<div class="link"><a href="Buchungen.php">Buchungen</a></div>
				<div class="link"><a href="php/Stammdaten/Stammdaten.php" >Stammdaten</a></div>
					<div class="link"><a href="php/BDE/BDE.php">BDE</a></div>
					<!--<div class="link"><a href="#">Kunden</a></div>-->	
		</div>
	</div>
		
		<!-- Tag nach vorne / hinten -->
		<div class="kalender_scroll">
		<p id="tag"><?php echo $Tag; ?></p>
		<div id="datum_steuerung">
		<a href="Personal.php?timestamp=<?php echo $tgdate; ?>&tagesid=<?php echo dayBack(); ?>" class="last"><button type="button" class="btn">/&laquo;</button></a>
			<p class="gross"><?php echo $daTum; ?></p>
		<a href="Personal.php?timestamp=<?php echo $tgdate; ?>&tagesid=<?php echo dayForward(); ?>" class="last"><button type="button" class="btn">&raquo;\</button></a>
		</div>
		<p><a class="grau" href="Personal.php">Datum Heute</a></p>
	</div>

	<div class="kalender_rechts"><img src="images/logo.png"></div>
	</div>

		<!-- Tabelle Schichtplanung -->
	<div class="persplan">
			<!-- Schichtplanung Überschrift-->
	<div class="head"><p class="gross">Arbeitszeiten</p></div>
				<tbody>
					<table class="schichtplan">
						<?php getSchichtplan($headzeit); ?>	<!-- pers_plan_form.php -->
					</table>
				</tbody>
			<!--<div class="inner">-->
					<input type="hidden" name="az_aktion" value="az_speichern">
					<input type="hidden" name="tagesid" value="<?php echo $tagesid; ?>">
					<input type="submit" value="Arbeitszeiten Speichern">
			<!--</div>-->
					</form>
		</div>
		
			
			<!--Schichtplan erstellen-->
	<div class="persplan">
		<div class="head"><p class="gross">Schichtplan erstellen</p></div>
			<form action="php/inc/Schichtplan/schichtplan_druck.php" method="post" target="blank">
				<div class="inputgroup">
					<div class="innerP">
						<div class="zeile3">
							<label for="plan_von">von</label>
								<input type="date" name="plan_von" required>
						</div>
						<div class="zeile3">
							<label for="plan_bis">bis</label>
								<input type="date" name="plan_bis" required>
						</div>
						<div class="zeile3">
							<label for="umsatz">&nbsp;</label>
								<input type="hidden" name="titel" value="Dienstplan">
								<!--<input type="hidden" name="dienstplan" value="dienstplan">-->
								<input type="submit" value="Abfragen">
						</div>

					</div>
				</div>
			</form>
		</div>
			
		<!-- Tabelle Fehlzeiten-->
	<div class="persplan">
		<p class="gross">Abwesenheit</p>




		<table class="schichtplan">
			<?php getAbwesenheit($fehl_Head); ?>		<!--fehlzeit_abfragen.php-->
		</table>
	
				
	</div>

</body>
</html>