<!-- Raum 2-->
	<div class="container">
		<div class="row">
			<div id="raum2" class="col-4">
				<table class="r2">				
				<tr><th colspan="2">Platz 2</th></tr>
	

<!--Eintrag 2_-11-->
					<tr <?php $terminort = $tagesid."020600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-10-->
					<tr <?php $terminort = $tagesid."020615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-9-->
					<tr <?php $terminort = $tagesid."020630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-8-->
					<tr <?php $terminort = $tagesid."020645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

				
<!--Eintrag 2_-7-->
					<tr <?php $terminort = $tagesid."020700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-6-->
					<tr <?php $terminort = $tagesid."020715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-5-->
					<tr <?php $terminort = $tagesid."020730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-4-->
					<tr <?php $terminort = $tagesid."020745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
				
	<tbody <?php if (substr($zeiten, 2, 1) == 1) {echo substr($zeiten, 2).'class="setting_on"';} else {echo 'class="setting_off"';} ?> >
<!--Eintrag 2_-3-->
					<tr <?php $terminort = $tagesid."020800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-2-->
					<tr <?php $terminort = $tagesid."020815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_-1-->
					<tr <?php $terminort = $tagesid."020830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_0-->
					<tr <?php $terminort = $tagesid."020845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
	
<!--Eintrag 2_1-->
					<tr <?php $terminort = $tagesid."020900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_2-->
					<tr <?php $terminort = $tagesid."020915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."020915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_3-->
					<tr <?php $terminort = $tagesid."020930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."020930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_4-->
					<tr <?php $terminort = $tagesid."020945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."020945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												

<!--Eintrag 2_5-->
					<tr <?php $terminort = $tagesid."021000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_6-->
					<tr <?php $terminort = $tagesid."021015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_7-->
					<tr <?php $terminort = $tagesid."021030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_8-->
					<tr <?php $terminort = $tagesid."021045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_9-->
					<tr <?php $terminort = $tagesid."021100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_10-->
					<tr <?php $terminort = $tagesid."021115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_11-->
					<tr <?php $terminort = $tagesid."021130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_12-->
					<tr <?php $terminort = $tagesid."021145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_13-->
					<tr <?php $terminort = $tagesid."021200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_14-->
					<tr <?php $terminort = $tagesid."021215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_15-->
					<tr <?php $terminort = $tagesid."021230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_16-->
					<tr <?php $terminort = $tagesid."021245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_17-->
					<tr <?php $terminort = $tagesid."021300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_18-->
					<tr <?php $terminort = $tagesid."021315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_19-->
					<tr <?php $terminort = $tagesid."021330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_20-->
					<tr <?php $terminort = $tagesid."021345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_21-->
					<tr <?php $terminort = $tagesid."021400"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1400&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021400";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>						
<!--Eintrag 2_22-->
					<tr <?php $terminort = $tagesid."021415"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1415&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021415";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_23-->
					<tr <?php $terminort = $tagesid."021430"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1430&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021430";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_24-->
					<tr <?php $terminort = $tagesid."021445"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1445&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021445";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_25-->
					<tr <?php $terminort = $tagesid."021500"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1500&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021500";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_26-->
					<tr <?php $terminort = $tagesid."021515"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1515&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021515";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_27-->
					<tr <?php $terminort = $tagesid."021530"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1530&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021530";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_28-->
					<tr <?php $terminort = $tagesid."021545"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1545&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021545";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_29-->
					<tr <?php $terminort = $tagesid."021600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_30-->
					<tr <?php $terminort = $tagesid."021615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_31-->
					<tr <?php $terminort = $tagesid."021630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_32-->
					<tr <?php $terminort = $tagesid."021645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_33-->
					<tr <?php $terminort = $tagesid."021700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_34-->
					<tr <?php $terminort = $tagesid."021715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_35-->
					<tr <?php $terminort = $tagesid."021730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_36-->
					<tr <?php $terminort = $tagesid."021745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
									
<!--Eintrag 2_+1-->
					<tr <?php $terminort = $tagesid."021800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 2_+2-->
					<tr <?php $terminort = $tagesid."021815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_+3-->
					<tr <?php $terminort = $tagesid."021830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_+4-->
					<tr <?php $terminort = $tagesid."021845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 2_+5-->
					<tr <?php $terminort = $tagesid."021900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>


												
<!--Eintrag 2_+6-->
					<tr <?php $terminort = $tagesid."021915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_+7-->
					<tr <?php $terminort = $tagesid."021930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_+8-->
					<tr <?php $terminort = $tagesid."021945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=1945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."021945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
			

												
<!--Eintrag 2_+9-->
					<tr <?php $terminort = $tagesid."022000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."022000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 2_+10-->
					<tr <?php $terminort = $tagesid."022015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."022015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_+11-->
					<tr <?php $terminort = $tagesid."022030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."022030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 2_+12-->
					<tr <?php $terminort = $tagesid."022045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."022045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

	

												
<!--Eintrag 2_+13-->
					<tr <?php $terminort = $tagesid."022100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."022100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

<!--Eintrag 2_+14-->
					<tr <?php $terminort = $tagesid."022115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_+15-->
					<tr <?php $terminort = $tagesid."022130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_+16-->
					<tr <?php $terminort = $tagesid."022145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 2_+17-->
					<tr <?php $terminort = $tagesid."022200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>					

<!--Eintrag 2_+14-->
					<tr <?php $terminort = $tagesid."022215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_+15-->
					<tr <?php $terminort = $tagesid."022230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_+16-->
					<tr <?php $terminort = $tagesid."022245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 2_+17-->
					<tr <?php $terminort = $tagesid."022300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>				

<!--Eintrag 2_+18-->
					<tr <?php $terminort = $tagesid."022315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_+19-->
					<tr <?php $terminort = $tagesid."022330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 2_+20-->
					<tr <?php $terminort = $tagesid."022345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=2345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."022345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 2_+21-->
					<tr <?php $terminort = $tagesid."020000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=02&zeit=0000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">00:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."020000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
												
				</table>
			</div>
		</div>
	</div>