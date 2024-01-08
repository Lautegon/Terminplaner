<?php
	//echo $tagesid;
	
		$persHeadVar = $tagesid."%";
		$stmt_persHead_abfragen = $dbNew->prepare("SELECT * from anwesenheit where (id LIKE '$persHeadVar' AND `0900` = 1) OR (id LIKE '$persHeadVar' AND `0930` = 1) OR (id LIKE '$persHeadVar' AND `1000` = 1) OR (id LIKE '$persHeadVar' AND `1030` = 1) OR (id LIKE '$persHeadVar' AND `1100` = 1) OR (id LIKE '$persHeadVar' AND `1130` = 1) OR (id LIKE '$persHeadVar' AND `1200` = 1) OR (id LIKE '$persHeadVar' AND `1230` = 1) OR (id LIKE '$persHeadVar' AND `1300` = 1) OR (id LIKE '$persHeadVar' AND `1330` = 1) OR (id LIKE '$persHeadVar' AND `1400` = 1) OR (id LIKE '$persHeadVar' AND `1430` = 1) OR (id LIKE '$persHeadVar' AND `1500` = 1) OR (id LIKE '$persHeadVar' AND `1530` = 1) OR (id LIKE '$persHeadVar' AND `1600` = 1) OR (id LIKE '$persHeadVar' AND `1630` = 1) OR (id LIKE '$persHeadVar' AND `1700` = 1) OR (id LIKE '$persHeadVar' AND `1730` = 1) OR (id LIKE '$persHeadVar' AND `1800` = 1) OR (id LIKE '$persHeadVar' AND `1830` = 1) OR (id LIKE '$persHeadVar' AND `1900` = 1) OR (id LIKE '$persHeadVar' AND `1930` = 1) OR (id LIKE '$persHeadVar' AND `2000` = 1) OR (id LIKE '$persHeadVar' AND `2030` = 1) ");
		$stmt_persHead_abfragen->execute();
		$anwesend = $stmt_persHead_abfragen->fetchAll(PDO::FETCH_GROUP);
		//var_dump($anwesend);
		
					
											//Abfrage von Personalnummer und Nickname zum Tabelle erzeugen
					$stmt_headPers_abfrage = $dbNew->prepare("SELECT id, nickname FROM personal ORDER BY id");
					$stmt_headPers_abfrage->execute();
					$results = $stmt_headPers_abfrage->fetchAll(PDO::FETCH_KEY_PAIR);
			//print_r($results);
					foreach ($results as $persid => $mitarbeiter) {
								$persidSp = sprintf("%02d",$persid);
								$speicherid = $tagesid.$persidSp;
								
										//Mitarbeiter für Auswahlfeld Masseurin in Termine Formular erzeugen
					if (isset($anwesend[$speicherid])) {
						$nickNameList[] = $mitarbeiter;
					}
					}
					If (isset($nickNameList[0])) {
						$nnl = implode(",", $nickNameList);
						//echo "<br />".$nnl."<br />";
					}
					else {
						$nickNameList[] = "Heute Arbeitet keiner! ";
						$nnl = implode(",", $nickNameList);
						//echo "<br />".$nnl."<br />";
					}

		
$persHead = array('Name', '09:00', '09:30', '10:00', '10:30', ' ', '11:00', '11:30', '12:00', '12:30', '13:00', '13:30', ' ', '14:00', '14:30', '15:00', '15:30', '16:00', '16:30', ' ', '17:00', '17:30', '18:00', '18:30', '19:00', '19:30', ' ', '20:00', '20:30');


function getPersonal($persHead, $results) {
		global $anwesend;
		global $tagesid;
		include "php/inc/dbNew.php";
		
				echo "<tr>";
				foreach( $persHead as $key => $value ) {
					If ($key = " ") {
						echo "<th class='leer'>".$value."</th>";
					}
					else {
						echo "<th>".$value."</th>";
					}
			}
		echo "</tr>";

						foreach ($results as $persid => $mitarbeiter) {
								$persidSp = sprintf("%02d",$persid);
								$speicherid = $tagesid.$persidSp;
								
										//Mitarbeiter in Schichtplan Tabelle als Abwesend Anzeigen
					if (isset($anwesend[$speicherid])) {						

				
echo "<tr><td>".$mitarbeiter."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['0900'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['0930'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1000'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1030'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								//Trenner
							echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1100'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1130'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1200'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1230'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1300'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1330'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								//Trenner
							echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1400'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1430'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1500'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1530'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1600'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1630'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								//Trenner
							echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1700'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1730'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1800'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1830'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1900'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['1930'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								//Trenner
							echo "<td > </td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2000'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2030'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							echo "<td>".$checked."</td>";
								// if (isset($anwesend[$speicherid]) AND $anwesend[$speicherid]['0']['2100'] == 1) { $checked = "<img src='images/plink_checked.png'>";} else { $checked = ""; }
							// echo "<td>".$checked."</td></tr>";

								
							}
						}
}

?>