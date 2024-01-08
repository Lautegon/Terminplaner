<!-- Raum 6-->
	<div class="container">
		<div class="row">
			<div id="raum6" class="col-4">
				<table class="r6">				
				<tr><th colspan="2">Platz 6</th></tr>
	

<!--Eintrag 6_-11-->
					<tr <?php $terminort = $tagesid."060600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-10-->
					<tr <?php $terminort = $tagesid."060615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-9-->
					<tr <?php $terminort = $tagesid."060630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-8-->
					<tr <?php $terminort = $tagesid."060645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

				
<!--Eintrag 6_-7-->
					<tr <?php $terminort = $tagesid."060700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-6-->
					<tr <?php $terminort = $tagesid."060715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-5-->
					<tr <?php $terminort = $tagesid."060730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-4-->
					<tr <?php $terminort = $tagesid."060745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
				
	<tbody <?php if (substr($zeiten, 2, 1) == 1) {echo substr($zeiten, 2).'class="setting_on"';} else {echo 'class="setting_off"';} ?> >
<!--Eintrag 6_-3-->
					<tr <?php $terminort = $tagesid."060800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-2-->
					<tr <?php $terminort = $tagesid."060815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_-1-->
					<tr <?php $terminort = $tagesid."060830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_0-->
					<tr <?php $terminort = $tagesid."060845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
	
<!--Eintrag 6_1-->
					<tr <?php $terminort = $tagesid."060900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_2-->
					<tr <?php $terminort = $tagesid."060915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."060915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_3-->
					<tr <?php $terminort = $tagesid."060930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."060930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_4-->
					<tr <?php $terminort = $tagesid."060945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."060945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												

<!--Eintrag 6_5-->
					<tr <?php $terminort = $tagesid."061000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_6-->
					<tr <?php $terminort = $tagesid."061015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_7-->
					<tr <?php $terminort = $tagesid."061030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_8-->
					<tr <?php $terminort = $tagesid."061045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_9-->
					<tr <?php $terminort = $tagesid."061100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_10-->
					<tr <?php $terminort = $tagesid."061115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_11-->
					<tr <?php $terminort = $tagesid."061130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_12-->
					<tr <?php $terminort = $tagesid."061145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_13-->
					<tr <?php $terminort = $tagesid."061200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_14-->
					<tr <?php $terminort = $tagesid."061215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_15-->
					<tr <?php $terminort = $tagesid."061230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_16-->
					<tr <?php $terminort = $tagesid."061245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_17-->
					<tr <?php $terminort = $tagesid."061300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_18-->
					<tr <?php $terminort = $tagesid."061315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_19-->
					<tr <?php $terminort = $tagesid."061330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_20-->
					<tr <?php $terminort = $tagesid."061345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_21-->
					<tr <?php $terminort = $tagesid."061400"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1400&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061400";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>						
<!--Eintrag 6_22-->
					<tr <?php $terminort = $tagesid."061415"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1415&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061415";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_23-->
					<tr <?php $terminort = $tagesid."061430"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1430&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061430";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_24-->
					<tr <?php $terminort = $tagesid."061445"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1445&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061445";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_25-->
					<tr <?php $terminort = $tagesid."061500"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1500&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061500";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_26-->
					<tr <?php $terminort = $tagesid."061515"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1515&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061515";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_27-->
					<tr <?php $terminort = $tagesid."061530"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1530&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061530";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_28-->
					<tr <?php $terminort = $tagesid."061545"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1545&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061545";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_29-->
					<tr <?php $terminort = $tagesid."061600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_30-->
					<tr <?php $terminort = $tagesid."061615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_31-->
					<tr <?php $terminort = $tagesid."061630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_32-->
					<tr <?php $terminort = $tagesid."061645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_33-->
					<tr <?php $terminort = $tagesid."061700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_34-->
					<tr <?php $terminort = $tagesid."061715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_35-->
					<tr <?php $terminort = $tagesid."061730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_36-->
					<tr <?php $terminort = $tagesid."061745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
									
<!--Eintrag 6_+1-->
					<tr <?php $terminort = $tagesid."061800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 6_+2-->
					<tr <?php $terminort = $tagesid."061815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_+3-->
					<tr <?php $terminort = $tagesid."061830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_+4-->
					<tr <?php $terminort = $tagesid."061845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 6_+5-->
					<tr <?php $terminort = $tagesid."061900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>


												
<!--Eintrag 6_+6-->
					<tr <?php $terminort = $tagesid."061915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_+7-->
					<tr <?php $terminort = $tagesid."061930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_+8-->
					<tr <?php $terminort = $tagesid."061945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=1945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."061945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
			

												
<!--Eintrag 6_+9-->
					<tr <?php $terminort = $tagesid."062000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."062000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 6_+10-->
					<tr <?php $terminort = $tagesid."062015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."062015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_+11-->
					<tr <?php $terminort = $tagesid."062030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."062030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 6_+12-->
					<tr <?php $terminort = $tagesid."062045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."062045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

	

												
<!--Eintrag 6_+13-->
					<tr <?php $terminort = $tagesid."062100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."062100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

<!--Eintrag 6_+14-->
					<tr <?php $terminort = $tagesid."062115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_+15-->
					<tr <?php $terminort = $tagesid."062130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_+16-->
					<tr <?php $terminort = $tagesid."062145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 6_+17-->
					<tr <?php $terminort = $tagesid."062200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>					

<!--Eintrag 6_+14-->
					<tr <?php $terminort = $tagesid."062215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_+15-->
					<tr <?php $terminort = $tagesid."062230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_+16-->
					<tr <?php $terminort = $tagesid."062245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 6_+17-->
					<tr <?php $terminort = $tagesid."062300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>				

<!--Eintrag 6_+18-->
					<tr <?php $terminort = $tagesid."062315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_+19-->
					<tr <?php $terminort = $tagesid."062330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 6_+20-->
					<tr <?php $terminort = $tagesid."062345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=2345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."062345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 6_+21-->
					<tr <?php $terminort = $tagesid."060000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=06&zeit=0000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">00:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."060000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
												
				</table>
			</div>
		</div>
	</div>