<?php

		//Tagesid Erstellen
		$datumAktuell = new DateTime('now');

		
	if (isset($_GET['tagesid']) && !empty($_GET['tagesid'])){
		$tagesid = $_GET['tagesid'];
		$jaHr = substr($tagesid,-6,2);
		$mO = substr($tagesid,-4,2);
		$tG = substr($tagesid,-2,2);
		$daTum = $tG.".".$mO.".20".$jaHr;
		$austrittCheck = "20".$jaHr."-".$mO."-".$tG;
		} 
		else {
		$tagesid = $datumAktuell->format("ymd");
		$daTum = $datumAktuell->format("d.m.Y");	
		$austrittCheck = $datumAktuell->format("Y-m-d");

		}

		//Abfrage vorhandener Schichtplandaten aus DB anwesenheit
		include "php/inc/dbNew.php";

		$anwesendVar = $tagesid."%";
		$stmt_anwesend_abfragen = $dbNew->prepare("SELECT * from anwesenheit where id LIKE '$anwesendVar'");
		$stmt_anwesend_abfragen->execute();
		$anwesend = $stmt_anwesend_abfragen->fetchAll(PDO::FETCH_GROUP);

$headzeit = array('Pers.Nr.', 'Name', '09:00', '09:30', '10:00', '10:30', '09-11', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', '11-14', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', '14-17', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', '17-20', '20:00', '20:30-21:00');

		
function getSchichtplan($headzeit) {
		global $anwesend;
		global $tagesid;
		global $daTum;
		global $austrittCheck;

	
		//echo "<table class='schichtplan'>";
			echo "<tr>";
				foreach( $headzeit as $key => $value ) {
				echo "<th>".$value."</th>";
			}
		echo "</tr>";
		echo '<form action="#" method="post">'; 
		echo "<tr>";
				include "php/inc/dbNew.php";
					$stmt_pers_abfrage = $dbNew->prepare("SELECT id, nickname, austritt, eintritt FROM personal ORDER BY id");
					$stmt_pers_abfrage->execute();
					$results = $stmt_pers_abfrage->fetchAll(PDO::FETCH_GROUP); //Das war mal (PDO;;FETCH_KEY_PAIR)
	//print_r($results);
						foreach( $results as $key => $value ) {
								$persidSp = sprintf("%02d",$key);
								$speicherid = $tagesid.$persidSp;
									
									//Gekündigte Mitarbeiter Ausblenden
									if ($value[0]['austritt'] != '0000-00-00' AND $value[0]['austritt'] <= $austrittCheck) {
									continue;
									}
									
									//Noch nicht begonnene Mitarbeiter Ausblenden
									if ($value[0]['eintritt'] > $austrittCheck) {
									continue;
									}

									//Mitarbeiter in Schichtplan Tabelle als Abwesend Anzeigen
									if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['fehl'] == 2) {
									echo "<td><a href=\"#\" onclick= \"window.open('php/fehlzeitenform.php?persnr=".$key."','Fehlzeiteneingabe','width=800,height=600,scrollbars=no,rezsizeable=yes,status=yes');\">".$persidSp."</a></td><td>".$value[0]['nickname']."</td><td colspan='29' class='frei'>A b w e s e n d</td>";
									}
									
						else {
							//Hier hackt es $persid im array Ansprechen
							echo "<td><a href=\"#\" onclick= \"window.open('php/inc/Personal/fehlzeitenform.php?persnr=".$key."','Fehlzeiteneingabe','width=800,height=600,scrollbars=no,rezsizeable=yes,status=yes');\">".$persidSp."</a></td><td>".$value[0]['nickname']."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['0900'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_1' type='checkbox' name='anwesend[".$speicherid."][]' value='`0900`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['0930'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_1' type='checkbox' name='anwesend[".$speicherid."][]' value='`0930`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1000'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_1' type='checkbox' name='anwesend[".$speicherid."][]' value='`1000`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1030'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_1' type='checkbox' name='anwesend[".$speicherid."][]' value='`1030`'".$checked."><span class='checkmark'></span></label></td>";
								
								//Sammelbox 9 - 11 Uhr
							echo "<td><input onclick=\"getElemente('step_1', 'anwesend[".$speicherid."][]', this)\" type='checkbox'></td>";							
								
								//Zweite Gruppe zur Zusammenfassung
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1100'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_2' type='checkbox' name='anwesend[".$speicherid."][]' value='`1100`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1130'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_2' type='checkbox' name='anwesend[".$speicherid."][]' value='`1130`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1200'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_2' type='checkbox' name='anwesend[".$speicherid."][]' value='`1200`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1230'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_2' type='checkbox' name='anwesend[".$speicherid."][]' value='`1230`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1300'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_2' type='checkbox' name='anwesend[".$speicherid."][]' value='`1300`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1330'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_2' type='checkbox' name='anwesend[".$speicherid."][]' value='`1330`'".$checked."><span class='checkmark'></span></label></td>";
								
								//Samemlbox 11 - 14 Uhr
							echo "<td><input onclick=\"getElemente('step_2', 'anwesend[".$speicherid."][]', this)\" type='checkbox'></td>";
								
								//Dritte Gruppe Zusmmenfassung
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1400'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_3' type='checkbox' name='anwesend[".$speicherid."][]' value='`1400`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1430'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_3' type='checkbox' name='anwesend[".$speicherid."][]' value='`1430`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1500'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_3' type='checkbox' name='anwesend[".$speicherid."][]' value='`1500`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1530'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_3' type='checkbox' name='anwesend[".$speicherid."][]' value='`1530`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1600'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_3' type='checkbox' name='anwesend[".$speicherid."][]' value='`1600`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1630'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_3' type='checkbox' name='anwesend[".$speicherid."][]' value='`1630`'".$checked."><span class='checkmark'></span></label></td>";
								
								//Sammelbox 17 - 20 Uhr
							echo "<td><input onclick=\"getElemente('step_3', 'anwesend[".$speicherid."][]', this)\" type='checkbox'></td>";
								
								//Vierte Gruppe Zusammenfassung
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1700'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_4' type='checkbox' name='anwesend[".$speicherid."][]' value='`1700`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1730'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_4' type='checkbox' name='anwesend[".$speicherid."][]' value='`1730`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1800'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_4' type='checkbox' name='anwesend[".$speicherid."][]' value='`1800`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1830'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_4' type='checkbox' name='anwesend[".$speicherid."][]' value='`1830`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1900'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_4' type='checkbox' name='anwesend[".$speicherid."][]' value='`1900`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1930'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input class='step_4' type='checkbox' name='anwesend[".$speicherid."][]' value='`1930`'".$checked."><span class='checkmark'></span></label></td>";
								
								//Sammelbox 17 - 20 Uhr
							echo "<td><input onclick=\"getElemente('step_4', 'anwesend[".$speicherid."][]', this)\" type='checkbox'></td>";
								
								//Überstunden
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2000'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input type='checkbox' name='anwesend[".$speicherid."][]' value='`2000`'".$checked."><span class='checkmark'></span></label></td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2030'] == 1) { $checked = "checked";} else { $checked = ""; }
							echo "<td><label class='checkcontrol'><input type='checkbox' name='anwesend[".$speicherid."][]' value='`2030`'".$checked."><span class='checkmark'></span></label></td>";
								//if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2100'] == 1) { $checked = "checked";} else { $checked = ""; }
							//echo "<td><label class='checkcontrol'><input type='checkbox' name='anwesend[".$speicherid."][]' value='`2100`'".$checked."><span class='checkmark'></span></label></td>";
					}

		echo "</tr>";
							//echo "<input type ='hidden' name='speicherid' value='".$speicherid."'>";
			}
		//echo "</table>";
	}

?>
