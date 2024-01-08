<?php
try {
$benutz = "root";
$schluessel = "";
$dbNew = new PDO('mysql:host=localhost;dbname=termine', $benutz, $schluessel, array(PDO::ATTR_PERSISTENT => true));
//echo "Verbunden\n";
}
catch (PDOException $e) {
	die("Kann nicht Verbinden: ".$e->getMessage());
}
?>