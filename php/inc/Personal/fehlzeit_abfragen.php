<?php
	


	if (isset($_GET['tagesid']) && !empty($_GET['tagesid'])){
			//Aktuellen Tag Anhand der übergebenen TagesId Festlegen, Bei Planung in Zukunft oder Vergangenheit
						$tagesid = $_GET['tagesid'];
						$jaHr = substr($tagesid,-6,2);
						$mO = substr($tagesid,-4,2);
						$tG = substr($tagesid,-2,2);
						$Fehl_daTum = "20".$jaHr."-".$mO."-".$tG;
						
						$ist_Fehl = strtotime($Fehl_daTum);
					} 
			else {
				//Ansicht Zeitraum ab dem aktuellem Datum
						$ist_Fehl = time();
				}
	

	
	$start_Fehl = date("Y-m", $ist_Fehl)."%";

	$plus_Eins = mktime(0, 0, 0, date("m", $ist_Fehl)+1, date("d", $ist_Fehl), date("Y", $ist_Fehl));

	$stopp_Fehl = date("Y-m", $plus_Eins)."%";

	
	
	

	$stmt_fehlzeit_abfrage = $dbNew->prepare("SELECT * FROM fehlzeiten WHERE fehl_von LIKE '$start_Fehl' OR fehl_von LIKE '$stopp_Fehl' OR fehl_bis LIKE '$start_Fehl' OR fehl_bis LIKE '$stopp_Fehl' ORDER BY fehl_von");
	$stmt_fehlzeit_abfrage->execute();
	$fehlzeiten = $stmt_fehlzeit_abfrage->fetchAll(PDO::FETCH_GROUP);

	
	// Tabelle für Mitarbeiter -> Fehlzeiten erstellen
		$fehl_Head = array('Pers. Nr.', 'Name', 'vom', 'bis', 'Art', 'Url. Tage', 'Info');
		
	function getAbwesenheit($fehl_Head) {
	global $fehlzeiten;
			echo "<tr>";
				foreach($fehl_Head AS $key => $value) {
					echo "<th>".$value."</th>";
				}
			echo "</tr>";
		
				foreach($fehlzeiten AS $fehl_Satz => $fehl_Eintrag) {
					$zeit_von = date("d.m.Y", strtotime($fehl_Eintrag[0]['fehl_von']));
					$zeit_bis = date("d.m.Y", strtotime($fehl_Eintrag[0]['fehl_bis']));

				echo "<tr><td>".sprintf('%02d',$fehl_Eintrag[0]['fehl_id'])."</td><td>".$fehl_Eintrag[0]['fehl_nick']."</td><td>".$zeit_von."</td><td>".$zeit_bis."</td><td>".$fehl_Eintrag[0]['fehl_art']."</td><td>".$fehl_Eintrag[0]['u_tg']."</td><td>".$fehl_Eintrag[0]['fehl_info']."</td></tr>";
				}
		}
?>



