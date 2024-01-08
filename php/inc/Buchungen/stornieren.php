<?php

		$massage_st = "";
			if (isset($_POST['anwendung'])) {
				$massage_st = trim($_POST['anwendung']);
			}
		$dauer_st = "";
			if (isset($_POST['dauer'])) {
				$dauer_st = trim($_POST['dauer']);
			}
		$vorname_st = "";
			if (isset($_POST['vorname'])) {
				$vorname_st = trim($_POST['vorname']);
			}
		$nachname_st = "";
			if (isset($_POST['nachname'])) {
				$nachname_st = trim($_POST['nachname']);
			}
		$info_st = "";
			if (isset($_POST['info'])) {
				$info_st = trim($_POST['info']);
			}
		$mailgo_st = "";
			if (isset($_POST['mailgo'])) {
				$mailgo_st = trim($_POST['mailgo']);
			}
		$mail_st = "";
			if (isset($_POST['mail'])) {
				$mail_st = trim($_POST['mail']);
			}
		$stornogrund = "";
			if (isset($_POST['info'])) {
				$stornogrund = trim($_POST['info']);
			}
		$telefon_st = "";
			if (isset($_POST['telefon'])) {
				$telefon_st = trim($_POST['telefon']);
			}
		$terminid_in = $_POST['tid'];
		
			$stunden_st = substr($terminid_in, -4, 2);
			$minuten_st = substr($terminid_in, -2, 2);
			$tag_st = substr($terminid_in, -8, 2);
			$monat_st = substr($terminid_in, -10, 2);
			$jahr_st = substr($terminid_in, -12, 2);
		
		$termin_datum = substr($terminid_in, -12, 6);
		$termin_zeit = substr($terminid_in, -4, 4);
		$termin_raum = substr($terminid_in, -6, 2);
		$terminid_st = $termin_datum.$termin_raum.$termin_zeit."1";
		
		$storno_suche = $terminid_st."%";
		
		 // Für den Fall an die gleiche Terminid zwei mal storniert wird, wird der id nach Raum und Zeit eine Zahl zugefügt
		$stmt_storno_check = $dbNew->prepare("SELECT * FROM storno WHERE id_st LIKE ? ");
		$stmt_storno_check->execute(array($storno_suche));
		$storno_check = $stmt_storno_check->rowCount();
		If ($storno_check>0) {
			$storno_2 = $storno_check+1;
			$terminid_st = $termin_datum.$termin_raum.$termin_zeit.$storno_2;
		}
		
		//Termine in DB storno eintragen
			
	$stmt_storno = $dbNew->prepare("INSERT INTO storno (id_st, massage_st, dauer_st, vorname_st, mail_st, nachname_st, stornogrund, telefon_st) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
	$stmt_storno->execute(array($terminid_st, $massage_st, $dauer_st, $vorname_st, $mail_st, $nachname_st, $stornogrund, $telefon_st));
	
					//Mail an Kunde wenn Checkbox an
					If ($mailgo_st == "ja") {
						$empfaenger = $mail;
						$betreff = "Ihr Termin wurde Storniert!";
						$absender = "<canangathaimassage-herzogenaurach.de>";
						$text = "Hallo ".$vorname_st." ".$nachname_st." \n
						Ihren Termin am ".$tag_st.".".$monat_st.".".$jahr_st." um ".$stunden_st.":".$minuten_st." Uhr \n
						zur ".$massage." haben wir wie gewünscht Storniert.\n

						Ihr Cananga Team";
						
						$headers = array();
						$headers[] = "MIME-Version: 1.0";
						$headers[] = "Content-type: text/plain; charset=utf-8";
						$headers[] = "From: Cananga Thaimassage {$absender}";
						$headers[] = "Reply-To: {$absender}";
						
						mail($empfaenger, $betreff, $text, implode("\r\n",$headers));
						
					}
					
					//Stornierten Termin aus Buchungen löschen
	$stmt_storno_loeschen = $dbNew->prepare("DELETE FROM buchungen WHERE id = ?");
		$stmt_storno_loeschen->execute(array($terminid_in));

			//Aktion Bestätigen Fenster schießen

					$storno = "<script>
					jQuery(document).ready(function eintrag()
					{
					jQuery('#storno').toggle('slow');
					});
					</script><script>
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