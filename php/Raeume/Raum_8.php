<!-- Raum 8-->
	<div class="container">
		<div class="row">
			<div id="raum2" class="col-4">
				<table class="r2">				
				<tr><th colspan="2">Platz 8</th></tr>
	

<!--Eintrag 8_-11-->
					<tr <?php $terminort = $tagesid."080600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-10-->
					<tr <?php $terminort = $tagesid."080615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-9-->
					<tr <?php $terminort = $tagesid."080630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-8-->
					<tr <?php $terminort = $tagesid."080645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

				
<!--Eintrag 8_-7-->
					<tr <?php $terminort = $tagesid."080700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-6-->
					<tr <?php $terminort = $tagesid."080715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-5-->
					<tr <?php $terminort = $tagesid."080730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-4-->
					<tr <?php $terminort = $tagesid."080745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
				
	<tbody <?php if (substr($zeiten, 2, 1) == 1) {echo substr($zeiten, 2).'class="setting_on"';} else {echo 'class="setting_off"';} ?> >
<!--Eintrag 8_-3-->
					<tr <?php $terminort = $tagesid."080800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-2-->
					<tr <?php $terminort = $tagesid."080815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_-1-->
					<tr <?php $terminort = $tagesid."080830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_0-->
					<tr <?php $terminort = $tagesid."080845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
	
<!--Eintrag 8_1-->
					<tr <?php $terminort = $tagesid."080900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_2-->
					<tr <?php $terminort = $tagesid."080915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."080915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_3-->
					<tr <?php $terminort = $tagesid."080930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."080930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_4-->
					<tr <?php $terminort = $tagesid."080945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."080945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												

<!--Eintrag 8_5-->
					<tr <?php $terminort = $tagesid."081000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_6-->
					<tr <?php $terminort = $tagesid."081015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_7-->
					<tr <?php $terminort = $tagesid."081030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_8-->
					<tr <?php $terminort = $tagesid."081045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_9-->
					<tr <?php $terminort = $tagesid."081100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_10-->
					<tr <?php $terminort = $tagesid."081115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_11-->
					<tr <?php $terminort = $tagesid."081130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_12-->
					<tr <?php $terminort = $tagesid."081145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_13-->
					<tr <?php $terminort = $tagesid."081200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_14-->
					<tr <?php $terminort = $tagesid."081215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_15-->
					<tr <?php $terminort = $tagesid."081230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_16-->
					<tr <?php $terminort = $tagesid."081245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_17-->
					<tr <?php $terminort = $tagesid."081300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_18-->
					<tr <?php $terminort = $tagesid."081315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_19-->
					<tr <?php $terminort = $tagesid."081330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_20-->
					<tr <?php $terminort = $tagesid."081345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_21-->
					<tr <?php $terminort = $tagesid."081400"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1400&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081400";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>						
<!--Eintrag 8_22-->
					<tr <?php $terminort = $tagesid."081415"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1415&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081415";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_23-->
					<tr <?php $terminort = $tagesid."081430"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1430&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081430";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_24-->
					<tr <?php $terminort = $tagesid."081445"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1445&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081445";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_25-->
					<tr <?php $terminort = $tagesid."081500"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1500&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081500";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_26-->
					<tr <?php $terminort = $tagesid."081515"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1515&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081515";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_27-->
					<tr <?php $terminort = $tagesid."081530"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1530&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081530";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_28-->
					<tr <?php $terminort = $tagesid."081545"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1545&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081545";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_29-->
					<tr <?php $terminort = $tagesid."081600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_30-->
					<tr <?php $terminort = $tagesid."081615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_31-->
					<tr <?php $terminort = $tagesid."081630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_32-->
					<tr <?php $terminort = $tagesid."081645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_33-->
					<tr <?php $terminort = $tagesid."081700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_34-->
					<tr <?php $terminort = $tagesid."081715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_35-->
					<tr <?php $terminort = $tagesid."081730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_36-->
					<tr <?php $terminort = $tagesid."081745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
									
<!--Eintrag 8_+1-->
					<tr <?php $terminort = $tagesid."081800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 8_+2-->
					<tr <?php $terminort = $tagesid."081815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_+3-->
					<tr <?php $terminort = $tagesid."081830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_+4-->
					<tr <?php $terminort = $tagesid."081845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 8_+5-->
					<tr <?php $terminort = $tagesid."081900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>


												
<!--Eintrag 8_+6-->
					<tr <?php $terminort = $tagesid."081915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_+7-->
					<tr <?php $terminort = $tagesid."081930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_+8-->
					<tr <?php $terminort = $tagesid."081945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=1945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."081945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
			

												
<!--Eintrag 8_+9-->
					<tr <?php $terminort = $tagesid."082000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."082000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 8_+10-->
					<tr <?php $terminort = $tagesid."082015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."082015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_+11-->
					<tr <?php $terminort = $tagesid."082030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."082030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 8_+12-->
					<tr <?php $terminort = $tagesid."082045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."082045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

	

												
<!--Eintrag 8_+13-->
					<tr <?php $terminort = $tagesid."082100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."082100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

<!--Eintrag 8_+14-->
					<tr <?php $terminort = $tagesid."082115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_+15-->
					<tr <?php $terminort = $tagesid."082130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_+16-->
					<tr <?php $terminort = $tagesid."082145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 8_+17-->
					<tr <?php $terminort = $tagesid."082200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>					

<!--Eintrag 8_+14-->
					<tr <?php $terminort = $tagesid."082215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_+15-->
					<tr <?php $terminort = $tagesid."082230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_+16-->
					<tr <?php $terminort = $tagesid."082245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 8_+17-->
					<tr <?php $terminort = $tagesid."082300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>				

<!--Eintrag 8_+18-->
					<tr <?php $terminort = $tagesid."082315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_+19-->
					<tr <?php $terminort = $tagesid."082330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 8_+20-->
					<tr <?php $terminort = $tagesid."082345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=2345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."082345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 8_+21-->
					<tr <?php $terminort = $tagesid."080000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=08&zeit=0000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">00:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."080000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
												
				</table>
			</div>
		</div>
	</div>