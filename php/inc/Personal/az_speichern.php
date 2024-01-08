<?php
include "php/inc/dbNew.php";
		//Vorher belegte, jetzt leere Tage in DB eintragen! Möglichkeit ein leeres Anwesenheitsformular zu speichern
	$leerTage = $_POST['tagesid']."%";
	$stmt_leerTage_loeschen = $dbNew->prepare("DELETE FROM anwesenheit WHERE id LIKE '$leerTage' AND fehl = '0'");
	$stmt_leerTage_loeschen->execute();
	//echo "Alle Einträge ausser fehl gelöscht!<br />";
	
	//Abarbeiten der Formulareingaben "Anwesend" in zwei Schleifen. Mitarbeiter und Zeiten
	If (isset($_POST['anwesend']) && !empty($_POST['anwesend'])) {
	$anwesendNeu = $_POST['anwesend'];
	foreach ($anwesendNeu AS $persid => $zeiten) {
		//echo $persid."<br />";

		//Neue ID für Mitarbeiter an diesem Tag anlegen 
		$stmt_zeiten_anlegen = $dbNew->prepare("INSERT INTO anwesenheit (id) VALUES (?)");
		$stmt_zeiten_anlegen->execute([$persid]);
		//Die Zeiten für diese ID eintragen
				for ($i = 0; $i<count($zeiten); $i++) {
					$zeitenSp = $zeiten[$i];
						$stmt_zeiten_eintragen = $dbNew->prepare("UPDATE anwesenheit SET $zeitenSp = ? WHERE id = ? ");
							$istDa = "1";
								$stmt_zeiten_eintragen->execute(array($istDa, $persid));
				}
	}
	}



?>
