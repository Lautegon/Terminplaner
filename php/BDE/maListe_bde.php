<?php

	include "../inc/dbNew.php";
	$stmt_maListe_bde = $dbNew->prepare("SELECT id, nickname From personal ORDER BY id");
	$stmt_maListe_bde->execute();
	$maListe_bde = $stmt_maListe_bde->fetchAll(PDO::FETCH_KEY_PAIR);
	//print_r($maListe_bde);
		//$maListe[] = "Alle";
		foreach ($maListe_bde as $persid => $mitarbeiter) {
				$maName = sprintf("%02d",$persid)." ".$mitarbeiter;
				$maListe[] = $maName;
		}
	//print_r ($maListe);


?>