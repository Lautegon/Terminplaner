<?php

	
	
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen; jeglicher sonstiger head-Inhalt muss *nach* diesen Tags kommen -->
    <title>BDE</title>
    <!-- Bootstrap -->
	<script src="../../js/jquery-3.5.1.min.js"></script>
	<script src="../../js/bootstrap.min.js"></script>
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
	<link href="../../css/custom.css" rel="stylesheet">
	<link href="../../css/kalender.css" rel="stylesheet">
  </head>
 
<body>
	<div class="header">
		
		<!-- Menue -->
	<div id="kalender_menue">
		<div class="menue">
				<div class="link"><a href="../../Personal.php">Personal</a></div>
					<!--<div class="link"><a href="#">Kunden</a></div>-->
						<div class="link"><a href="../../Buchungen.php">Buchungen</a></div>
		</div>
		</div>
	<div class="kalender_scroll"><p id="tag">BDE</p></div>
		<!--Logo Header-->

	<div class="kalender_rechts"><img src="../../images/logo.png"></div>
	</div>
	
		<!--Formularfelder für Auswertung-->
			<!--Umsätze-->
	<div class="persplan">
		<div class="head"><p class="gross">Umsätze</p></div>
			<form action="um_ergebnis.php" method="post" target="blank">
				<div class="inputgroup">
					<div class="innerP">
						<div class="zeile3">
							<label for="Um_von">von</label>
								<input type="date" name="Um_von" required>
						</div>
						<div class="zeile3">
							<label for="Um_bis">bis</label>
								<input type="date" name="Um_bis" required>
						</div>
						<div class="zeile3">
							<label for="umsatz">&nbsp;</label>
							<input type="submit" value="Abfragen">
						</div>

					</div>
				</div>
			</form>
		</div>
		
			<!--Auswertung Kassenbuch-->
	<div class="persplan">
		<div class="head"><p class="gross">Kassenbuch</p>
		
			<form action="kassenbuch.php" method="post" target="blank">
			
				<div class="inputgroup">
					<div class="innerP">
						<div class="zeile3">
							<label for="Um_von">von</label>
								<input type="date" name="Um_von" required>
						</div>
						<div class="zeile3">
							<label for="Um_bis">bis</label>
								<input type="date" name="Um_bis" required>
						</div>
						<div class="zeile3">
							<label for="umsatz">&nbsp;</label>
							<input type="submit" value="Abfragen">
						</div>

					</div>
				</div>
			</form>
			</div>
		</div>
		
		
			<!-- Mitarbeiter einzeln Stunden-->
	<div class="persplan">
		<div class="head"><p class="gross">Mitarbeiter Stunden</p></div>
			<form action="BDE_Ergebnis.php" method="post" target="blank">
				<div class="inputgroup">
					<div class="innerP">
						<div class="zeile3">
							<label for="MA_NR">Pers.Nr. / Nickname</label>
								<input type="text" list="maName" name="MA_STD" size = "1" required>
								<datalist id = "maName">
									<?php 
									include "maListe_bde.php";
										foreach ($maListe as $ma) {
											echo "<option>".$ma."</option>";
										}
									?>
								</datalist>
						</div>
						<div class="zeile3">
							<label for="MAst_von">von</label>
								<input type="date" name="MAst_von" required>
						</div>
						<div class="zeile3">
							<label for="MAst_bis">bis</label>
								<input type="date" name="MAst_bis" required>
						</div>
						<div class="zeile3">
							<label for="maStunden">&nbsp;</label>
								<input type="hidden" name="maStunden" value="maAbfrage">
								<input type="hidden" name="titel" value="Mitarbeiter Stunden">
								<input type="submit" value="Abfragen">
						</div>
					</div>
				</div>
			</form>
		</div>
		
			<!-- Mitarbeiter Massagen-->
	<div class="persplan">
		<div class="head"><p class="gross">Mitarbeiter Massagen</p></div>
			<form action="BDE_Ergebnis.php" method="post" target="blank">
				<div class="inputgroup">
					<div class="innerP">
						<div class="zeile3">
							<label for="MA_NR">Pers.Nr. / Nickname</label>
								<input type="text" list="maName" name="MA_MAS" size = "1" required>
								<datalist id = "maName">
									<?php 
									include "maListe_bde.php";
										foreach ($maListe as $ma) {
											echo "<option>".$ma."</option>";
										}
									?>
								</datalist>
						</div>
						<div class="zeile3">
							<label for="MAS_von">von</label>
								<input type="date" name="MAS_von" required>
						</div>
						<div class="zeile3">
							<label for="MAS_bis">bis</label>
								<input type="date" name="MAS_bis" required>
						</div>
						<div class="zeile3">
							<label for="masStunden">&nbsp;</label>
								<input type="hidden" name="massageStunden" value="massageAbfrage">
								<input type="hidden" name="titel" value="Mitarbeiter Massagen">
								<input type="submit" value="Abfragen">
						</div>
					</div>
				</div>
			</form>
		</div>
		


</body>
</html>