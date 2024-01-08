<?php
		include "../inc/dbNew.php";
		$print_pdf = "bde_pdf_alt.php";
		
	
		if (isset($_POST['maStunden']) AND $_POST['maStunden'] == 'maAbfrage') {
		include "funktionen/ma_stunden.php";
		$ist_funktion = $um_erg;
		$pdfName = "Stunden ".$mitarbeiter." vom ".date("d.m.Y", $start)." bis ".date("d.m.Y", $stopp).".pdf";

	}
	
		if (isset($_POST['massageStunden']) AND $_POST['massageStunden'] == 'massageAbfrage') {
		include "funktionen/ma_massagen.php";
		$ist_funktion = $um_erg;
		$pdfName = "Massagen ".$mitarbeiter." vom ".date("d.m.Y", $start)." bis ".date("d.m.Y", $stopp).".pdf";

	}


		
		
?>

<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Auswertungen</title>
    <!-- Bootstrap -->
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
	<link href="../../css/terminformular.css" rel="stylesheet">
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
  </head>
 
<body>
<div class="titel"><p class="gross"><?php echo $titel; ?></p></div>
<div id "umsatz">
<table>
	<?php $ist_funktion(); ?>
</table>
</div>
<p>&nbsp;</p>
<div class="pdf">
	<form action="<?php echo $print_pdf ?>" method="post">
		<input type='hidden' name='zeile_th' value='<?php echo $zeile_th ?>'>
		<input type="hidden" name="zeile_B" value="<?php echo $zeile_B ?>">
		<input type='hidden' name='zeile_C' value='<?php echo $zeile_C ?>'>
		<input type="hidden" name="start" value="<?php echo $start ?>">
		<input type="hidden" name="stopp" value="<?php echo $stopp ?>">
		<input type="hidden" name="titel" value="<?php echo $titel ?>">
		<input type="hidden" name="pdfName" value="<?php echo $pdfName ?>">
		<?php if (isset($zeile_th_E)) {
		echo "<input type='hidden' name='zeile_th_E' value='".$zeile_th_E."'>";
		//echo $zeile_th_E; 
		}?>
		<?php if (isset($zeile_F)) {
		echo "<input type='hidden' name='zeile_F' value='".$zeile_F."'>";
		//echo $zeile_F;  
		}?>
		<input type="submit" value="PDF speichern">
	</form>
</div>
</body>
</html>