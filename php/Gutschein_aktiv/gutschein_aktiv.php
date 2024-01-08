<?php
	include "../inc/dbNew.php";
		$verlauf_anzeigen = "";
		$verlauf_bar_anzeigen = "";
		$nummer_falsch = "";
		
		// Gutschein Verlauf
	If (isset($_POST['gs_suche']) and $_POST['gs_suche'] == "gs_suchen") {
			$gutschein_nr = $_POST['gs_suche_nr'];
		// Gutschein vorhanden / Aktuellen Wert Abfragen / DB gutschein
		$stmt_gs_aktuell_wert = $dbNew->prepare("SELECT * FROM gutschein WHERE gutschein_nr = ?");
		$stmt_gs_aktuell_wert->execute(array($gutschein_nr));
		$gs_vorhanden = $stmt_gs_aktuell_wert->rowCount();
		
		//Gutschein im Barverkauf Abfragen / DB barberkauf
		$stmt_gs_verlauf = $dbNew->prepare("SELECT * FROM barverkauf WHERE gutscheinnr = ? ORDER BY id");
		$stmt_gs_verlauf->execute(array($gutschein_nr));
		$gs_bar_vorhanden = $stmt_gs_verlauf->rowCount();
		$gs_verlauf = $stmt_gs_verlauf->fetchAll(PDO::FETCH_ASSOC);	// Einträge in DB barverkauf
		
	If ($gs_vorhanden>0) {
		$wert_aktuell = $stmt_gs_aktuell_wert->fetchAll(PDO::FETCH_ASSOC);	//Einträge in DB gutschein
		If ($wert_aktuell>0) {
			$verlauf_anzeigen = "ja";
		}		

				
		// Funktion Gutschein Verlauf wenn Gutschein noch vorhanden
		function getVerlauf() {
				
			global $gs_verlauf;		// Alle Einträge in DB barverkauf
			global $wert_aktuell;	// Alle Einträge in DB gutschein
					
		// DB gutschein Abfragen Verkauf Tag Verkauf Wert GS Nummer
		echo "<tr><th>Datum</th><th>Artikel</th><th>Wert</th><th>Gutschein Nr.</th><th>Betrag</th><th>Info</th></tr>";
		foreach ($wert_aktuell AS $such_gs) {		//Aktueller Wert eines vorhandenen Gutscheins wird Ausgegeben
				$jahr_ek = "20".substr($such_gs['verkauf_tag'],-6,2);
				$mo_ek = substr($such_gs['verkauf_tag'],-4,2);
				$day_ek = substr($such_gs['verkauf_tag'],-2,2);
			echo "<tr class='einnahme'><td>".$day_ek.".".$mo_ek.".".$jahr_ek."</td><td>Gutschein</td><td>Verkauf</td><td>".$such_gs['gutschein_nr']."</td><td>".$such_gs['wert_kauf']." €</td><td>".$such_gs['beschreibung']."</td></tr>";
		}			
			If (!empty($gs_verlauf)) {
				foreach($gs_verlauf as $verlauf) {
					
					$jahr = "20".substr($verlauf['tagesid'],-6,2);
					$mo = substr($verlauf['tagesid'],-4,2);
					$day = substr($verlauf['tagesid'],-2,2);
					
				If (($verlauf['klasse'] == "storno") OR ($verlauf['klasse'] == "storno_gs") OR ($verlauf['klasse'] == "storno_gs_wa")) {
					echo "<tr class='storno'><td>".$day.".".$mo.".".$jahr."</td><td>".$verlauf['artikel']."</td><td>".$verlauf['wert']."</td><td>".$verlauf['gutscheinnr']."</td><td>".$verlauf['preis']." €</td><td>".$verlauf['beschreibung']."</td></tr>";
					}
				If (($verlauf['klasse'] == "gs") OR ($verlauf['klasse'] == "gs_wa")) {		
					echo "<tr><td>".$day.".".$mo.".".$jahr."</td><td>".$verlauf['artikel']."</td><td>Eingelöst</td><td>".$verlauf['gutscheinnr']."</td><td>".$verlauf['preis']." €</td><td>".$verlauf['beschreibung']."</td></tr>";
					}
				}
					echo '<tr><td colspan="4">Aktueller Gutscheinwert:</td><td>'.$such_gs['wert'].' €</td></tr>';
			}
		}
	}
	
	//Verlauf von vollständig eingelösten Gutscheinen anzeigen
	If ($gs_vorhanden == 0 AND $gs_bar_vorhanden>0) {
			$verlauf_bar_anzeigen = "ja";
			
		function getBarVerlauf() {
				
			global $gs_verlauf;
			
			//print_r($gs_verlauf);
					
		echo "<tr class='eingeloest'><th colspan=6>Gutschein ist Eingelöst!</th></tr>";
		echo "<tr><th>Datum</th><th>Artikel</th><th>Wert</th><th>Gutschein Nr.</th><th>Betrag</th><th>Info</th></tr>";
		
		foreach ($gs_verlauf AS $such_gs) {
				$jahr_ek = "20".substr($such_gs['verkauf_tag'],-6,2);
				$mo_ek = substr($such_gs['verkauf_tag'],-4,2);
				$day_ek = substr($such_gs['verkauf_tag'],-2,2);
				
				$jahr_vk = "20".substr($such_gs['tagesid'],-6,2);
				$mo_vk = substr($such_gs['tagesid'],-4,2);
				$day_vk = substr($such_gs['tagesid'],-2,2);

		
  
		If ($such_gs['wert'] == "Einnahme") { 
			echo "<tr class='einnahme'><td>".$day_ek.".".$mo_ek.".".$jahr_ek."</td><td>".$such_gs['artikel']."</td><td>".$such_gs['wert']."</td><td>".$such_gs['gutscheinnr']."</td><td>".$such_gs['preis']." €</td><td>".$such_gs['beschreibung']."</td></tr>";
			}
					
		If (($such_gs['klasse'] == "storno_gs") OR ($such_gs['klasse'] == "storno_gs_wa")) {
			echo "<tr class='storno'><td>".$day_vk.".".$mo_vk.".".$jahr_vk."</td><td>".$such_gs['artikel']."</td><td>".$such_gs['wert']."</td><td>".$such_gs['gutscheinnr']."</td><td>".$such_gs['preis']." €</td><td>".$such_gs['beschreibung']."</td></tr>";
					}
		If (($such_gs['klasse'] == "gs") OR ($such_gs['klasse'] == "gs_wa")) {		
			echo "<tr><td>".$day_vk.".".$mo_vk.".".$jahr_vk."</td><td>".$such_gs['artikel']."</td><td>".$such_gs['wert']."</td><td>".$such_gs['gutscheinnr']."</td><td>".$such_gs['preis']." €</td><td>".$such_gs['beschreibung']."</td></tr>";
					}
				}
					//echo '<tr><td colspan="4">Aktueller Gutscheinwert:</td><td>'.$such_gs['wert'].' €</td></tr>';
			}
		}

			
		If ($gs_vorhanden == 0 AND $gs_bar_vorhanden == 0) {
			$nummer_falsch = "<script>
				jQuery(document).ready(function eintrag()
				{
				jQuery('#nrfalsch').show('slow');
				});
				</script><script>
				jQuery(document).ready(setTimeout(function eintrag()
				{
				jQuery('#nrfalsch').hide('slow');
				}, 2500));
				</script>";
			//goto fertig;
		}
		
	}
			
	//fertig:
				//Abfrage Gutschein aktiv
		
			$stmt_gutschein_aktiv = $dbNew->prepare("SELECT verkauf_tag, gutschein_nr, wert, wert_neu_tag, beschreibung  FROM gutschein ORDER BY verkauf_tag DESC" );
			$stmt_gutschein_aktiv->execute();
			$gutschein_aktiv = $stmt_gutschein_aktiv->fetchAll(PDO::FETCH_ASSOC);
			
			//print_r($gutschein_aktiv);

		
		function getGutschein_aktiv() {
				
				global $gutschein_aktiv;
				
			echo '<tr><th colspan="5" style="font-size: 12pt;">Gutschein Aktiv</th></tr><tr><th>Verkauft am</th><th>Gutschein Wert</th><th>Gutschein Nr.</th><th>letzte Änderung</th><th>Info</th></tr>';
			
				foreach($gutschein_aktiv as $key => $umsatz_satz) {
					If(!empty($umsatz_satz)) {
									//Datum Verkaufstag
					
								$jahr = "20".substr($umsatz_satz['verkauf_tag'],-6,2);
								$mo = substr($umsatz_satz['verkauf_tag'],-4,2);
								$day = substr($umsatz_satz['verkauf_tag'],-2,2);
									//Datum der letzten Wertänderung
									
								
							If ($umsatz_satz['wert_neu_tag'] != "0") {
								$jahr_a = "20".substr($umsatz_satz['wert_neu_tag'],-6,2);
								$mo_a = substr($umsatz_satz['wert_neu_tag'],-4,2);
								$day_a = substr($umsatz_satz['wert_neu_tag'],-2,2);
								
								$datum_aenderung = $day_a.".".$mo_a.".".$jahr_a;
							}
							else {
								$datum_aenderung = "";
							}
								
								$umsatz_gesamt[] = $umsatz_satz['wert'];

					echo "<tr><td>".$day.".".$mo.".".$jahr."</td><td>".sprintf("%.2f", $umsatz_satz['wert'])." €</td><td>".$umsatz_satz['gutschein_nr']."</td><td>".$datum_aenderung."</td><td>".$umsatz_satz['beschreibung']."</td></tr>";
					
					}
				}
				
							//Gesamtsumme Gutschein Verkauf Ausgabe in der Web Version
				$gesamtUmsatz = array_sum($umsatz_gesamt);
				echo '<tr class="fett"><td>Gesamt</td><td>'.sprintf("%.2f", $gesamtUmsatz).' EUR</td></tr></table>';				
				
		}

?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Gutscheine aktiv</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
	<link href="../../css/terminformular.css" rel="stylesheet">
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
  </head>
 
<body>
<!-- Fehlermeldung Gutscheinnummer falsch -->
<?php echo $nummer_falsch; ?>
				<div id="nrfalsch" class="terminok">
					<h1><span style="color: #FF0000">Gutschein nicht vorhanden!</span></h1>
				</div>


<div class="titel"><p class="gross">Gutschein Verlauf</p></div>
	<div class="maEingabe">
		<form action="#" method="post">
		<input type="hidden" name="gs_suche" value="gs_suchen">
		<div class="innerP">
			<div class="zeile3normal">
				<label for="gs_suche_nr">Gutscheinnummer</label>
					<input type="text" name="gs_suche_nr" required />
			</div>
			<div class="zeile3normal">
				<label for="gs_suche">&nbsp;</label>
					
					<input name="verlauf" type="submit" value="Verlauf">
					<!--<button class="" type="submit" name="gs_suche" value="gs_suchen">Verlauf</button>-->
				</div>
			</div>
		<div>
			<table>
			<?php If ($verlauf_anzeigen == "ja") { getVerlauf(); } ?>
			<?php If ($verlauf_bar_anzeigen == "ja") { getBarVerlauf(); } ?>
			</table>
		</div>
		</form>	
	</div>

				
		

<div class="titel"><p class="gross">Aktive Gutscheine</p></div>
<div><button href="#" id="alle_an">Alle Anzeigen</button></div>
<div id="umsatz">
<table>
	<?php getGutschein_aktiv(); ?>
</table>
</div>

<script>
jQuery(document).ready(function() {
	jQuery('#alle_an').click(function() {
		jQuery('#umsatz').toggle('slow');
	})
});
</script>

</body>
</html>

