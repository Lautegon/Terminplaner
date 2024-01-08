<?php

		// Wird Aufgerufen durch "Abwesenheit Speichern" in Fehlzeitenform
		
		$persnr_fehl = "";
		if (isset($_POST['fehl_id'])) {
			$persnr_fehl = $_POST['fehl_id'];
		}
		$fehl_nick = "";
		if (isset($_POST['fehl_nick'])) {
			$fehl_nick = $_POST['fehl_nick'];
		}
		$fehl_von = "";
		if (isset($_POST['fehl_von'])) {
			$fehl_von = $_POST['fehl_von'];
		}
		$fehl_bis = "";
		if (isset($_POST['fehl_bis'])) {
			$fehl_bis = $_POST['fehl_bis'];
		}
		$fehl_art = "";
		if (isset($_POST['fehl_art'])) {
			$fehl_art = $_POST['fehl_art'];
		}
		$u_tg = "";
		if (isset($_POST['u_tg'])) {
			$u_tg = $_POST['u_tg'];
		}
		$fehl_info = "";
		if (isset($_POST['fehl_info'])) {
			$fehl_info = $_POST['fehl_info'];
		}
		
				//Urlaubstage Anspruch in DB Personal Aktualisieren
				
		If ($fehl_art == "Urlaub") {
			$stmt_urlakt_abfragen = $dbNew->prepare("Select urlakt FROM personal WHERE id = ?");
			$stmt_urlakt_abfragen->execute(array($persnr_fehl));
			$urlakt = $stmt_urlakt_abfragen->fetch();
			
			$urlakt_neu = $urlakt[0]-$u_tg;
			
			$stmt_urlakt_eintragen = $dbNew->prepare("UPDATE personal SET urlakt = ? WHERE id = ?");
				$stmt_urlakt_eintragen->execute (array($urlakt_neu, $persnr_fehl));
		}
				
		
				// Eingetragene Fehlzeiten in DB fehlzeiten Speichern / Grundlage für Ausgabe Tabelle Abwesenheit
		
		$stmt_fehl_eintragen = $dbNew->prepare("INSERT INTO fehlzeiten (fehl_id, fehl_nick, fehl_von, fehl_bis, fehl_art, fehl_info, u_tg) VALUE (?, ?, ?, ?, ?, ?, ?)");
		$stmt_fehl_eintragen->execute(array($persnr_fehl, $fehl_nick, $fehl_von, $fehl_bis, $fehl_art, $fehl_info, $u_tg));
		
				//Errechnen der TagesId's zum Eintrag in DB anwesenheit als nicht Anwesend 
			$persnr = sprintf("%02d", $persnr_fehl);
			$datumStart = $fehl_von;
			$datumStopp = $fehl_bis;
			$testStart = strtotime($datumStart);
				//echo $testStart."<br />";
			$testStopp = strtotime($datumStopp);
				//echo $testStopp."<br />";
					for($i = strtotime($datumStart); $i < strtotime($datumStopp)+86400; $i += 86400) {
						$fehltageId[] = date("ymd", $i).sprintf("%02d", $persnr);
					}
//var_dump($fehltageId);
//echo "<br />";
				//Löschen vorhandener Einträge in "anwesenheit" weil jetzt Urlaub oder Krank
			$stmt_anwesend_sperren = $dbNew->prepare("DELETE FROM anwesenheit WHERE id = ?");
				foreach($fehltageId AS $vid) {
						//echo $vid."<br />";
						$stmt_anwesend_sperren->bindParam(1, $vid);
							$stmt_anwesend_sperren->execute();
					}
				//Eintragen in "anwesenheit" Wert "2" unter "fehl" -> für nicht verfügbar
			$stmt_abwesend_eintragen = $dbNew->prepare("INSERT INTO anwesenheit (id, fehl) VALUES (?, ?)");
					foreach($fehltageId AS $vid_1) {
							$stmt_abwesend_eintragen->execute(array($vid_1, "2"));
					}
				//Bestätigungsfenster Ein- und Ausblenden
					echo "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#fehl_in').toggle('slow');
					});
					</script>";
			
					echo "<script>
					  window.onunload = refreshParent;
						function refreshParent() {
						window.opener.location.reload();
						}
						jQuery(document).ready(setTimeout(function fensterzu()
							{
							window.close();
							}, 2000));
					</script>";
		

?>