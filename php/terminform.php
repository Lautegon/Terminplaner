<?php
		
	
		
		//Ruft die Form delterm.php auf wenn eine id (deltid) Übergeben wurde.
	if (isset($_GET['deltid'])) {
		$terminid = $_GET['deltid'];
	}
		//Übergibt die id an formArbeit.php, dann wird der Termin Abgerufen und in Formfeldern Ausgegeben 
	else {
		$terminid = $_GET['datum'].$_GET['raum'].$_GET['zeit'];
	}
		// Liste der Mitarbeiter nach Schichtplan
	If (isset($_GET['nnl'])) {
	$nnl = explode(",", $_GET['nnl']);
	//print_r($nnl);
	}
	
	// Variablen für Bestätigungsfenster einfüheren als leer
	$tok = ""; 
	$tgeae = "";
	$zchk = "";
	$versch = "";
	$storno = "";
	$gsfalsch = "";
	$gsminus = "";
	$kopieren = "";
	$terminBelegt = "";
	
	// Variablen für pattern
	$szTitel = "bitte kein ' < >  ; # $";
	$szPattern ="[! &quot%&()+,-./0-:=?@A-Za-zÄÜÖäüö]*";
	
	// Formularbearbeitung
	include "inc/dbNew.php";
	include "inc/Buchungen/formArbeit.php";
	include "../set.php";

	
	echo "Variable Terminid: ".$terminid;
	
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>Termineingabe</title>
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">
	<link href="../css/kalender.css" rel="stylesheet">
	<link href="../css/terminformular.css" rel="stylesheet">
	<script src="../js/jquery-3.5.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>

  </head>
  <body>
<div id="eintragen">
	<div id="tagAngabe">
		<h2 class="terminform"><?php echo $tag.".".$monat.".".$jahr."   "?>Platz <?php echo $_GET['raum']."   "?>um <?php echo $stunden.":".$minuten." "?>Uhr</h2>

<?php echo $tok.$tgeae.$zchk.$versch.$storno.$gsfalsch.$gsminus.$kopieren.$terminBelegt ?>

				<div id="tok" class="terminok">
					<h1>EINGETRAGEN!!!</h1>
				</div>

				<div id="tgeae" class="terminok">
					<h1>Geändert!!!</h1>
				</div>

				<div id="zchk" class="terminok">
					<h1><span style="color: #FF0000">In dieser Zeit sind Termine vorhanden!</span></h1>
				</div>
				
				<div id="terminBelegt" class="terminok">
					<h1><span style="color: #FF0000">Dieser Termin ist Belegt!</span></h1>
				</div>

				<div id="versch" class="terminok">
					<h1>Der Termin wurde verschoben!</h1>
				</div>

				<div id="storno" class="terminok">
					<h1>Der Termin wurde Storniert!</h1>
				</div>

				<div id="gsfalsch" class="terminok">
					<h1><span style="color: #FF0000">Gutscheinnummer nicht vorhanden!</span></h1>
				</div>

				<div id="gsminus" class="terminok">
					<h1><span style="color: #FF0000">Gutscheinwert zu klein!</span></h1>
				</div>

				<div id="kopieren" class="terminok">
					<h1>Termin kopiert!!!</h1>
				</div>
	</div>
<form action = "#" method ="post">
	<div class="inputgroup_terminform">
		<div class="inner">
			<div class="massage">
				<label class="terminform_l" for="anwendung">Anwendung</label>
				<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" list="massagen" name="anwendung" value="<?php if(isset($ist_massage)){echo $ist_massage;} ?>" required >
				<datalist id="massagen">
					<?php echo $liste_anw; ?>
				</datalist>
			</div>
			<div class="dauer">
				<label class="terminform_l" for="zeit">Dauer</label>
				<select name="dauer" size="1" required>
					<option value="15" <?php if (isset($ist_dauer) && $ist_dauer == 15) {echo 'selected="selected"';} ?>>15</option>
					<option value="30" <?php if (isset($ist_dauer) && $ist_dauer == 30) {echo 'selected="selected"';} ?>>30</option>
					<option value="45" <?php if (isset($ist_dauer) && $ist_dauer == 45) {echo 'selected="selected"';} ?>>45</option>
					<option value="60" <?php if (isset($ist_dauer) && $ist_dauer == 60) {echo 'selected="selected"';} ?>>60</option>
					<option value="75" <?php if (isset($ist_dauer) && $ist_dauer == 75) {echo 'selected="selected"';} ?>>75</option>
					<option value="90" <?php if (isset($ist_dauer) && $ist_dauer == 90) {echo 'selected="selected"';} ?>>90</option>
					<option value="105" <?php if (isset($ist_dauer) && $ist_dauer == 105) {echo 'selected="selected"';} ?>>105</option>
					<option value="120" <?php if (isset($ist_dauer) && $ist_dauer == 120) {echo 'selected="selected"';} ?>>120</option>
				</select>
			</div>
			<div class="vorname">
				<label class="terminform_l" for="vorname">Vorname</label>
				<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="vorname" value="<?php if(isset($ist_vorname)){echo $ist_vorname;} ?>" required>
			</div>
			<div class="nachname">
				<label class="terminform_l" for="nachname">Nachname</label>
				<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="nachname" value="<?php if(isset($ist_nachname)){echo $ist_nachname;} ?>" required>
			</div>
		</div>
		<div class="inner2">
			<div class="info">
				<label class="terminform_l" for="info">Bemerkungen</label>
				<textarea type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="info" rows="6" cols="50" wrap="soft" ><?php if(isset($ist_bemerkung)){echo $ist_bemerkung;} ?></textarea>
			</div>
		</div>
	</div>
	
	<div class="inputgroup_terminform">
			<div class="mail">
				<label class="terminform_l" for="mail">E-Mail</label>
				<input type="email" name="mail" value="<?php if(isset($ist_mail)){echo $ist_mail;} ?>">
			</div>
			<div class="tel">
				<label class="terminform_l" for="telefon">Telefon</label>
				<input type="tel" name="telefon" value="<?php if(isset($ist_telefon)){echo $ist_telefon;} ?>">
			</div>
			<div class="mailgo">
				<label class="terminform_l" for="mailgo">Mail an Kunden</label>
				<input type="checkbox" name="mailgo" value="ja">
			</div>
			<div class="mailgo">
				<label class="terminform_l" for="uew">Überweisung</label>
				<div class="uew_2">
				<input type="checkbox" name="uew" value="ja">
				<p class="ec_1"> </p>
				</div>
			</div>
	</div>
	
	<div class="inputgroup_terminform">
			<div class="mass1">
				<label class="terminform_l" for="mass1">Mitarbeiter 1</label>
				<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" list="nickName1" name="mass1" size = "1" value="<?php if(isset($ist_mass1)){echo $ist_mass1;} ?>">
					<datalist id = "nickName1">
						<?php
							foreach ($nnl as $nick) {
								echo "<option>".$nick."</option>";
							}
						?>
					</datalist>
			</div>
			<div class="mass2">
				<label class="terminform_l" for="mass2">Mitarbeiter 2</label>
				<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" list="nickName2" name="mass2" size="1" value="<?php if(isset($ist_mass2)){echo $ist_mass2;} ?>">
					<datalist id = "nickName2">
						<?php
							foreach ($nnl as $nick) {
								echo "<option>".$nick."</option>";
							}
						?>
					</datalist>
			</div>
			<div class="preis">
				<label class="terminform_l" for="preis">Preis €</label>
				<input type="number" class="input_number" name="preis" min="0" step="0.01" value="<?php if(isset($ist_preis)){echo $ist_preis;} ?>">
			</div>
	</div>
			<!--Gutschein Bezahlung-->

	<div class="gutschein">
		<div class="inputgroup_terminform">
			<div class="gutschein_label">
				<label class="terminform_l" for="Einleitung">&nbsp;</label>
				<input type="text" name="Einleitung" value="Bezahlung mit Gutschein: " readonly>
			</div>
			<div class="gutschein_nr">
				<label class="terminform_l" for="gutschein_nr">Gutschein Nr.</label>
				<input type="text" title="<?php echo $szTitel ?>" pattern="<?php echo $szPattern ?>" name="gutschein_nr">
			</div>
			<div class="preis">
				<label class="terminform_l" for="gutschein_wert">Gutschein Wert €</label>
				<div class="gs_preis">
					<input type="number" class="input_number" name="gutschein_wert" min="0" step="0.01">
				</div>
			
			</div>
	</div>
	<p style="text-align: center;">Hier den Betrag Eingeben der vom Gutschein Abgebucht wird!</p>
	</div>
	
	<div class="inputgroup_terminform">
		<div class="form_1">
			<input type="hidden" name="tid" value="<?php echo $terminid; ?>">
			<button class="termform" type="submit" name="aktion_speichern" value="speichern">Speichern</button>
			<button class="termform" onclick="window.close( 'return false')";>Schließen</button>
			<button class="termform" type="submit" name="aktion_storno" value="stornieren">Stornieren</button>
		</div>
	</div>
	

<hr>
	
			<!--Formularteil Termin verschieben-->
			<div><h2 class="terminform">Termin verschieben</h2></div>
	<div class="inputgroup_terminform">
			<div class="datum_neu">
				<label class="terminform_l" for="datum_neu">Datum neu</label>
				<input type="date" name="datum_neu">
			</div>
			<div class="zeit_neu">
				<label class="terminform_l" for="zeit_neu">Uhrzeit</label>
				<input type="time" min="<?php echo $openstart ?>" max="<?php echo $openstopp ?>" step="900" name="zeit_neu">
			</div>
			<div class="raum_neu">
				<label class="terminform_l" for="raum_neu">Platz</label>
				<select name="raum_neu" size="1">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
			</div>
	</div>
	<div class="inputgroup_terminform">
			<div class="form_1">
			<!--<input type="hidden" name="aktion" value="verschieben">-->
			<button class="termform" type="submit" name="aktion_verschieben" value="verschieben">Termin verschieben</button>
			</div>
		
	</div>
<hr>
				<!--Formularteil Termin Kopieren-->
			<div><h2 class="terminform">Termin Kopieren</h2></div>
	<div class="inputgroup_terminform">
			<div class="datum_neu">
				<label class="terminform_l" for="datum_copy">Datum neu</label>
				<input type="date" name="datum_copy">
			</div>
			<div class="zeit_neu">
				<label class="terminform_l" for="zeit_copy">Uhrzeit</label>
				<input type="time" min="<?php echo $openstart ?>" max="<?php echo $openstopp ?>" step="900" name="zeit_copy">
			</div>
			<div class="raum_neu">
				<label class="terminform_l" for="raum_copy">Platz</label>
				<select name="raum_copy" size="1">
					<option>01</option>
					<option>02</option>
					<option>03</option>
					<option>04</option>
					<option>05</option>
					<option>06</option>
					<option>07</option>
					<option>08</option>
					<option>09</option>
					<option>10</option>
					<option>11</option>
					<option>12</option>
				</select>
			</div>
	</div>
	<div class="inputgroup_terminform">
			<div class="form_1">
			<!--<input type="hidden" name="aktion" value="verschieben">-->
			<button class="termform" type="submit" name="aktion_kopieren" value="kopieren">Termin kopieren</button>
			<button class="termform" onclick="window.close( 'return false')";>Schließen</button>
			</div>
		
	</div>
</form>
</div>
</body>
</html>

