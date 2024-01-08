<?php
		

		

		$start = strtotime($_POST['MAS_von']);
		$stopp = strtotime($_POST['MAS_bis']);
		$titel = $_POST['titel'];
		$mitarbeiter = $_POST['MA_MAS'];
		//echo $mitarbeiter."<br />";
		$MA_MAS = substr($mitarbeiter, 3); 
		
			//echo $MA_MAS;
		
			//Fortlaufende ID's aus Start,- und End-Datum Erstellen
		$umVon = new DateTime($_POST['MAS_von']);
		$umBis = new DateTime($_POST['MAS_bis']);
		$interval = DateInterval::createFromDateString('1 day');
		$period = new DatePeriod($umVon, $interval, $umBis);
		foreach ($period as $dt) {
			$abfrage_ID = $dt->format("ymd");
			$abfrage_IDS[] = $abfrage_ID;
		}

			//Abfragen aller Massagen der Mitarbeiter im geforderten Zeitraum
			$stmt_mitarbeiter_massagen = $dbNew->prepare("SELECT id, massageart, dauer FROM buchungen WHERE (id LIKE ? AND masseurin_1 = ?) OR (id LIKE ? AND masseurin_2 = ?)");
				
				
				foreach($abfrage_IDS as $k => $uid) {
					$suchVar = $uid."%";
						$stmt_mitarbeiter_massagen->execute(array($suchVar, $MA_MAS, $suchVar, $MA_MAS));
							$massageStunden = $stmt_mitarbeiter_massagen->fetchAll(PDO::FETCH_ASSOC);
								$massageStunden_alle[] = $massageStunden;
				}
				
		//print_r($massageStunden_alle);
		//Tabelle für Zusammenfassung erstellen
				//Titelzeile für die Webausgabe der Funktion
		$umsatzHead = array('Datum', 'Mitarbeiter', 'Massage', 'Dauer', 'Arbeitsstunden');
		
				//Titelzeile für Tabelle pdf
		$zeile_th = '<table border="2" cellpadding="8" cellspacing="0" style="width: 100%; "><tr><th style="font-size: 16pt; text-align: center; color: red; ">'.$titel.'</th></tr></table><table border="1" cellpadding="5" cellspacing="0" style="width: 100%; "><tr><th style="width: 20%">Mitarbeiter</th><th style="width: 25%">Massage</th><th style="width: 10%">Dauer</th><th style="width: 25%">Datum</th><th style="width: 20%">Arbeitsstunden</th></tr>';
				//Variablen der Tabellenausgabe als PDF
		$zeile_B = '';
		$zeile_C = '';
		
		function getMassageStunden() {
				
				global $umsatzHead;
				global $massageStunden_alle;
				global $MA_MAS;
				global $start;
				global $stopp;
				global $zeile_B;
				global $zeile_C;
				
			echo "<tr>";
				foreach($umsatzHead as $key => $value) {
					echo "<th>".$value."</th>";
				}
			echo "</tr><tr><br />";
			$massagen_gesamt[] = 0;
				foreach($massageStunden_alle as $key => $umsatz) {
					If(!empty($umsatz)) {
						foreach($umsatz as $key => $umsatz_satz) {
								$jahr = "20".substr($umsatz_satz['id'],-11,2);
								$mo = substr($umsatz_satz['id'],-9,2);
								$day = substr($umsatz_satz['id'],-7,2);
								
								$massagen_gesamt[] = $umsatz_satz['dauer'];

					echo "<tr><td>".$day.".".$mo.".".$jahr."</td><td>".$MA_MAS."</td><td>".$umsatz_satz['massageart']."</td><td>".$umsatz_satz['dauer']." min.</td><td>".($umsatz_satz['dauer']/60)." Std.</td></tr>";
					
					$zeile_A = "<tr><td>".$MA_MAS."</td><td>".$umsatz_satz['massageart']."</td><td>".$umsatz_satz['dauer']." min.</td><td>".$day.".".$mo.".".$jahr."</td><td>".($umsatz_satz['dauer']/60)." Std.</td></tr>";
					
							//Zusammenfügen aller foreach Ausgaben zu einem String für die Variable zur PDF Ausgabe
					$zeile_B .= $zeile_A.' ';
						}
					}

				}
							//Gesamtsumme Umsätze Ausgabe in der Web Version
				$gesamtMassageStunden = array_sum($massagen_gesamt)/60;
				echo '<tr class="fett"><td>Gesamt vom:</td><td colspan = 2>'.date("d.m.Y", $start).' - '.date("d.m.Y", $stopp).'</td><td>Massagen</td><td>'.$gesamtMassageStunden.' Std.</td></tr>';
							//Gesamtsumme der Umsätze als Variable an die PDF Ausgabe
				$zeile_C = '<tr style="font-size: 11pt;"><td>'.$MA_MAS.'</td><td>Gesamt vom:</td><td colspan = "2">'.date("d.m.Y", $start).' - '.date("d.m.Y", $stopp).'</td><td>'.$gesamtMassageStunden.' Std.</td></tr></table>';
				}
				//Variable die den Namen der auszuführenden Funktion an die BDE Ergebnisseite Übergibt
		$um_erg = 'getMassageStunden';

	


?>