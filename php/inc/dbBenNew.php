<?php
try {
$benutz = "root";
$schluessel = "";
$dbBenNew = new PDO('mysql:host=localhost;dbname=kartei', $benutz, $schluessel, array(PDO::ATTR_PERSISTENT => true));
//echo "Verbunden\n";
}
catch (PDOException $e) {
	die("Kann nicht Verbinden: ".$e->getMessage());
}
?>