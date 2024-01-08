<?php
		
		//Fehlzeiten Eintrag löschen
	if (isset($_POST['fehl_Aktion']) AND $_POST['fehl_Aktion'] == 'fehl_loeschen') {
		
			$del_fehl_von = $_POST['del_fehl_von'];
			$del_fehl_bis = $_POST['del_fehl_bis'];
			$del_persnr = $_POST['del_fehl_id'];
			$uTageAnz = $_POST['url_tage'];
			
		//Gelöschten Urlaub wieder Gutschreiben
			// Aktuellen Urlaubstagestand Abfragen
		$stmt_urlaub_gutschrift = $dbNew->prepare("SELECT urlakt FROM personal WHERE id = ?");
		$stmt_urlaub_gutschrift->execute(array($del_persnr));
		$tage = $stmt_urlaub_gutschrift->fetch();
		
			// Gelöschte Urlaubstage wieder dazu zählen
		$tage_ist = $tage[0];
		$url_neu = ($tage_ist + $uTageAnz);
		
			// Neuen Stand Urlaubstage eintragen
		$stmt_urlaub_gutschrift_2 = $dbNew->prepare("UPDATE personal SET urlakt = ? WHERE id = ?");
		$stmt_urlaub_gutschrift_2->execute(array($url_neu, $del_persnr));
		
		
		 
			
		//Errechnen der TagesId's zum löschen in DB anwesenheit Anwesend freischalten
			$persnr = sprintf("%02d", $del_persnr);
			$datumStart = $del_fehl_von;
			$datumStopp = $del_fehl_bis;

					for($i = strtotime($datumStart); $i < strtotime($datumStopp)+86400; $i += 86400) {
						$fehltageId[] = date("ymd", $i).sprintf("%02d", $persnr);
					}

				//Löschen vorhandener Einträge in "anwesenheit" weil jetzt Urlaub oder Krank
			$stmt_anwesend_sperren = $dbNew->prepare("DELETE FROM anwesenheit WHERE id = ?");
				foreach($fehltageId AS $vid) {
						
						$stmt_anwesend_sperren->bindParam(1, $vid);
							$stmt_anwesend_sperren->execute();
					}
		
				// Fehlzeiteintrag aus DB fehlzeiten löschen. Auswahl über das Buchunsdatum beim Eintragen
				$loesch_Id = $_POST['buchung_date'];

				$stmt_fehlZeit_loeschen = $dbNew->prepare("DELETE FROM fehlzeiten WHERE buchung_date = ?");
				$stmt_fehlZeit_loeschen->execute(array($loesch_Id));
		}
		

		
		

		
?>