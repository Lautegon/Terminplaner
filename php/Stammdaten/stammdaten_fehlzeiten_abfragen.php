<?php
	
		include "../inc/dbNew.php";
			//Fehlzeiten löschen in DB fehlzeiten und DB anwesenheit (sperren für Einträge
		include "fehlzeiten_loeschen.php";
		
		$ist_Fehl = time();
		
		
			//Fehlzeiten zur Ausgabe von Datenbank Abfragen Zeitraum Dez. bevor / aktuelles Jahr / Jan danach
		$such_Fehl = date("Y", $ist_Fehl)."%";

		$yahr_back = mktime(0, 0, 0, date("m", $ist_Fehl), date("d", $ist_Fehl), date("Y", $ist_Fehl)-1);
		$such_Fehl_back = date("Y", $yahr_back)."-12-%";
		
		$yahr_for = mktime(0, 0, 0, date("m", $ist_Fehl), date("d", $ist_Fehl), date("Y", $ist_Fehl)+1);
		$such_Fehl_for = date("Y", $yahr_for)."-01-%";



		$stmt_urlaub_jahr = $dbNew->prepare("SELECT * FROM fehlzeiten WHERE (fehl_von LIKE '$such_Fehl_back') OR (fehl_bis LIKE '$such_Fehl_back') OR (fehl_von LIKE '$such_Fehl') OR (fehl_bis LIKE '$such_Fehl') OR (fehl_von LIKE '$such_Fehl_for') OR (fehl_bis LIKE '$such_Fehl_for') ORDER BY fehl_id");
		$stmt_urlaub_jahr->execute();
		$fehlzeiten = $stmt_urlaub_jahr->fetchAll(PDO::FETCH_GROUP);
		
		
		
				$fehl_Head = array('Pers. Nr.', 'Name', 'vom', 'bis', 'Art', 'Url. Tage', 'Info');
		
	function getAbwesenheit($fehl_Head) {
	global $fehlzeiten;
	global $ist_Fehl;
			echo "<tr>";
				foreach($fehl_Head AS $key => $value) {
					echo "<th>".$value."</th>";
				}
			echo "</tr>";
		
				foreach($fehlzeiten AS $fehl_Satz => $fehl_Eintrag) {
					
					$zeit_von = date("d.m.Y", strtotime($fehl_Eintrag[0]['fehl_von']));
					$zeit_bis = date("d.m.Y", strtotime($fehl_Eintrag[0]['fehl_bis']));
					echo '<form action="#" method="post">';
						echo '<input type="hidden" name="del_fehl_von" value="'.$zeit_von.'">';
						echo '<input type="hidden" name="del_fehl_bis" value="'.$zeit_bis.'">';
						echo '<input type="hidden" name="del_fehl_id" value="'.$fehl_Eintrag[0]['fehl_id'].'">';
						echo '<input type="hidden" name="url_tage" value="'.$fehl_Eintrag[0]['u_tg'].'">';
						echo '<input type="hidden" name="buchung_date" value="'.$fehl_Satz.'">'; //ID in DB fehlzeiten bestehen aus Y-m-d h:m:i 
						echo '<input type="hidden" name="fehl_Aktion" value="fehl_loeschen">';
						
								$fehl_ende = strtotime($fehl_Eintrag[0]['fehl_bis']);
					
			If ($ist_Fehl < $fehl_ende) {
				
				echo "<tr><td>".sprintf('%02d',$fehl_Eintrag[0]['fehl_id'])."</td><td>".$fehl_Eintrag[0]['fehl_nick']."</td><td>".$zeit_von."</td><td>".$zeit_bis."</td><td>".$fehl_Eintrag[0]['fehl_art']."</td><td>".$fehl_Eintrag[0]['u_tg']."</td><td>".$fehl_Eintrag[0]['fehl_info']."</td><td><input type='submit' value='löschen'></td></tr>";
					echo "</form>";
			}
			else {
					echo "<tr><td>".sprintf('%02d',$fehl_Eintrag[0]['fehl_id'])."</td><td>".$fehl_Eintrag[0]['fehl_nick']."</td><td>".$zeit_von."</td><td>".$zeit_bis."</td><td>".$fehl_Eintrag[0]['fehl_art']."</td><td>".$fehl_Eintrag[0]['u_tg']."</td><td>".$fehl_Eintrag[0]['fehl_info']."</td><td>Kein Löschen!</td></tr>";
					echo "</form>";
			}
				}
		}
		

?>