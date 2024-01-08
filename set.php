<?php
include "php/inc/dbNew.php";

$kd_ident = 1;
$kd_settings = "konfig.php";

	// Abrufen der Benutzer Einstellungen aus der DB u_settings
$stmt_set = $dbNew->prepare("SELECT * FROM u_settings WHERE kundennummer = ? ");
$stmt_set->execute(array($kd_ident));
while ($row = $stmt_set->fetch()) {
	$personal = $row['personal'];
	$zeiten = $row['zeiten'];
	$platz = $row['platz'];
	$az_ma_termin = $row['az_ma_termin'];
	$mwst_normal = $row['mwst_normal'];
	$mwst_vermindert = $row['mwst_vermindert'];
	$aw_behandlung = $row['aw_behandlung'];
	$aw_mitarbeiter = $row['aw_mitarbeiter'];
	$aw_artikel = $row['aw_artikel'];
}

	// Variablen Öffnungszeiten Beginn. Freischalten in Stunden von 6 Uhr bis 10 Uhr
switch (substr($zeiten, 0, 4)) {
	
	case "1111":
		$open6 = "setting_on";
		$open7 = "setting_on";
		$open8 = "setting_on";
		$open9 = "setting_on";
		$openstart = "06:00";
		break;

	case "2111":
		$open6 = "setting_off";
		$open7 = "setting_on";
		$open8 = "setting_on";
		$open9 = "setting_on";
		$openstart = "07:00";	
		break;

	case "2211":
		$open6 = "setting_off";
		$open7 = "setting_off";
		$open8 = "setting_on";
		$open9 = "setting_on";
		$openstart = "08:00";
		break;

	case "2221":
		$open6 = "setting_off";
		$open7 = "setting_off";
		$open8 = "setting_off";
		$open9 = "setting_on";
		$openstart = "09:00";
		break;

	case "2222":
		$open6 = "setting_off";
		$open7 = "setting_off";
		$open8 = "setting_off";
		$open9 = "setting_off";
		$openstart = "10:00";
		break;
		
}

	// Variablen Öffnungszeiten Ende. Freischalten in Stunden von 18 Uhr bis 0 Uhr.
switch (substr($zeiten, 4, 6)) {
	
	case "222222":
		$open19 = "setting_off";
		$open20 = "setting_off";
		$open21 = "setting_off";
		$open22 = "setting_off";
		$open23 = "setting_off";
		$open0 = "setting_off";
		$openstopp = "18:00";
		break;
		
	case "122222":
		$open19 = "setting_on";
		$open20 = "setting_off";
		$open21 = "setting_off";
		$open22 = "setting_off";
		$open23 = "setting_off";
		$open0 = "setting_off";
		$openstopp = "19:00";
		break;
		
	case "112222":
		$open19 = "setting_on";
		$open20 = "setting_on";
		$open21 = "setting_off";
		$open22 = "setting_off";
		$open23 = "setting_off";
		$open0 = "setting_off";
		$openstopp = "20:00";
		break;

	case "111222":
		$open19 = "setting_on";
		$open20 = "setting_on";
		$open21 = "setting_on";
		$open22 = "setting_off";
		$open23 = "setting_off";
		$open0 = "setting_off";
		$openstopp = "21:00";
		break;
		
	case "111122":
		$open19 = "setting_on";
		$open20 = "setting_on";
		$open21 = "setting_on";
		$open22 = "setting_on";
		$open23 = "setting_off";
		$open0 = "setting_off";
		$openstopp = "22:00";
		break;
		
	case "111112":
		$open19 = "setting_on";
		$open20 = "setting_on";
		$open21 = "setting_on";
		$open22 = "setting_on";
		$open23 = "setting_on";
		$open0 = "setting_off";
		$openstopp = "23:00";
		break;

	case "111111":
		$open19 = "setting_on";
		$open20 = "setting_on";
		$open21 = "setting_on";
		$open22 = "setting_on";
		$open23 = "setting_on";
		$open0 = "setting_on";
		$openstopp = "00:00";
		break;
		
	
		
}


	// Auswahlliste Anwendungen aus Datenbank mit <option> in Variable schreiben
$behandlungen = explode(";", $aw_behandlung);
	$liste_anw = "";
foreach ($behandlungen as $value_anw) {
		$liste_1 = "<option value ='".$value_anw."'>".$value_anw."</option>";
	$liste_anw .= $liste_1;
}

	// Auswahlliste Artikel Barverkauf aus DB mit <option> in Variable schreiben
$artikel = explode(";", $aw_artikel);
	$liste_art = "";
foreach ($artikel as $value_art) {
		$liste_1 = "<option value ='".$value_art."'>".$value_art."</option>";
	$liste_art .= $liste_1;
}


?>	