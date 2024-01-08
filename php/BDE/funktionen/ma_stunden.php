<?php
		


		$start = strtotime($_POST['MAst_von']);
		$stopp = strtotime($_POST['MAst_bis']);
		$titel = $_POST['titel'];
		$mitarbeiter = $_POST['MA_STD'];
		
			//Fortlaufende ID's aus Start,- und End-Datum Erstellen
		$MAstVon = new DateTime($_POST['MAst_von']);
		$MAstBis = new DateTime($_POST['MAst_bis']);
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($MAstVon, $interval, $MAstBis);
		foreach ($period as $dt) {
			$abfrage_ID = $dt->format("ymd");
			$abfrage_IDS[] = $abfrage_ID;
		}
		
			$stmt_mitarbeiter_stunden = $dbNew->prepare("SELECT * FROM anwesenheit WHERE ( id = ? AND `0900` = 1 AND fehl = 0) OR ( id = ? AND `0930` = 1 AND fehl = 0) OR ( id = ? AND `1000` = 1 AND fehl = 0) OR ( id = ? AND `1030` = 1 AND fehl = 0) OR ( id = ? AND `1100` = 1 AND fehl = 0) OR ( id = ? AND `1130` = 1 AND fehl = 0) OR ( id = ? AND `1200` = 1 AND fehl = 0) OR ( id = ? AND `1230` = 1 AND fehl = 0) OR ( id = ? AND `1300` = 1 AND fehl = 0) OR ( id = ? AND `1330` = 1 AND fehl = 0) OR ( id = ? AND `1400` = 1 AND fehl = 0) OR ( id = ? AND `1430` = 1 AND fehl = 0) OR ( id = ? AND `1500` = 1 AND fehl = 0) OR ( id = ? AND `1530` = 1 AND fehl = 0) OR ( id = ? AND `1600` = 1 AND fehl = 0) OR ( id = ? AND `1630` = 1 AND fehl = 0) OR ( id = ? AND `1700` = 1 AND fehl = 0) OR ( id = ? AND `1730` = 1 AND fehl = 0) OR ( id = ? AND `1800` = 1 AND fehl = 0) OR ( id = ? AND `1830` = 1 AND fehl = 0) OR ( id = ? AND`1900` = 1 AND fehl = 0) OR ( id = ? AND `1930` = 1 AND fehl = 0) OR ( id = ? AND `2000` = 1 AND fehl = 0) OR ( id = ? AND `2030` = 1 AND fehl = 0) ");

				//Abgefragte Personalnummer ermitteln		
					
					$MAnr = substr($mitarbeiter, 0, 2);
					

				foreach ($abfrage_IDS AS $k => $uid) {
					$suchVar = $uid.$MAnr;
					//echo $suchVar."<br />";
						$stmt_mitarbeiter_stunden->execute(array($suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar, $suchVar));
						$stunden_zaehlen = $stmt_mitarbeiter_stunden->fetchALL(PDO::FETCH_ASSOC);
						$stunden_zaehlen_alle[] = $stunden_zaehlen;
				}

	//print_r($stunden_zaehlen_alle);


		//Tabelle für Zusammenfassung erstellen
				//Titelzeile für die Webausgabe der Funktion
		$stundenHead = array('Mitarbeiter', 'Datum', 'Stunden');
		
				//Titelzeile für Tabelle pdf
		$zeile_th = '<table border="2" cellpadding="8" cellspacing="0" style="width: 100%; "><tr><th style="font-size: 16pt; text-align: center; color: red; ">'.$titel.'</th></tr></table><table border="1" cellpadding="5" cellspacing="0" style="width: 100%; "><tr><th style="width: 40%">Mitarbeiter</th><th style="width: 40%">Datum</th><th style="width: 20%">Stunden</th></tr>';
				//Variablen der Tabellenausgabe als PDF
		$zeile_B = '';
		$zeile_C = '';
		
		function getMitarbeiterStunden() {
				
				global $stundenHead;
				global $stunden_zaehlen_alle;
				global $start;
				global $stopp;
				global $zeile_B;
				global $zeile_C;
				global $mitarbeiter;
				
				$gesamtStunden = 0;
				
			echo "<tr>";
				foreach($stundenHead as $key => $value) {
					echo "<th>".$value."</th>";
				}
			echo "</tr><tr><br />";
			
				foreach($stunden_zaehlen_alle as $key => $stunden) {
					If(!empty($stunden)) {
						foreach($stunden as $key => $stunden_satz) {
								$jahr = "20".substr($stunden_satz['id'],-8,2);
								$mo = substr($stunden_satz['id'],-6,2);
								$day = substr($stunden_satz['id'],-4,2);
								
								$stunden_gesamt = ($stunden_satz['0900']+$stunden_satz['0930']+$stunden_satz['1000']+$stunden_satz['1030']+$stunden_satz['1100']+$stunden_satz['1130']+$stunden_satz['1200']+$stunden_satz['1230']+$stunden_satz['1300']+$stunden_satz['1330']+$stunden_satz['1400']+$stunden_satz['1430']+$stunden_satz['1500']+$stunden_satz['1530']+$stunden_satz['1600']+$stunden_satz['1630']+$stunden_satz['1700']+$stunden_satz['1730']+$stunden_satz['1800']+$stunden_satz['1830']+$stunden_satz['1900']+$stunden_satz['1930']+$stunden_satz['2000']+$stunden_satz['2030'])/2;
								
								$gesamtStunden += $stunden_gesamt;

					echo "<tr><td>".$mitarbeiter."</td><td>".$day.".".$mo.".".$jahr."</td><td>".$stunden_gesamt." Stunden</td></tr>";
					
					$zeile_A = "<tr><td>".$mitarbeiter."</td><td>".$day.".".$mo.".".$jahr."</td><td>".$stunden_gesamt." Stunden</td></tr>";
					
							//Zusammenfügen aller foreach Ausgaben zu einem String für die Variable zur PDF Ausgabe
					$zeile_B .= $zeile_A.' ';
						}
					}

				}
							//Gesamtsumme Umsätze Ausgabe in der Web Version
				
				echo '<tr class="fett"><td>Gesamt vom:</td><td>'.date("d.m.Y", $start).' - '.date("d.m.Y", $stopp).'</td><td>'.$gesamtStunden.' Stunden</td></tr>';
							//Gesamtsumme der Umsätze als Variable an die PDF Ausgabe
				$zeile_C = '<tr style="font-size: 11pt;"><td>Gesamt vom:</td><td>'.date("d.m.Y", $start).' - '.date("d.m.Y", $stopp).'</td><td>'.$gesamtStunden.' Stunden</td></tr></table>';
				}

				//Variable die den Namen der auszuführenden Funktion an die BDE Ergebnisseite Übergibt
		$um_erg = 'getMitarbeiterStunden';
		

	


?>