<!-- Raum 9-->
	<div class="container">
		<div class="row">
			<div id="raum3" class="col-4">
				<table class="r3">				
				<tr><th colspan="2">Platz 9</th></tr>
	

<!--Eintrag 9_-11-->
					<tr <?php $terminort = $tagesid."090600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-10-->
					<tr <?php $terminort = $tagesid."090615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-9-->
					<tr <?php $terminort = $tagesid."090630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-8-->
					<tr <?php $terminort = $tagesid."090645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open6.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">6:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

				
<!--Eintrag 9_-7-->
					<tr <?php $terminort = $tagesid."090700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-6-->
					<tr <?php $terminort = $tagesid."090715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-5-->
					<tr <?php $terminort = $tagesid."090730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-4-->
					<tr <?php $terminort = $tagesid."090745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open7.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">7:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
				
	<tbody <?php if (substr($zeiten, 2, 1) == 1) {echo substr($zeiten, 2).'class="setting_on"';} else {echo 'class="setting_off"';} ?> >
<!--Eintrag 9_-3-->
					<tr <?php $terminort = $tagesid."090800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-2-->
					<tr <?php $terminort = $tagesid."090815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_-1-->
					<tr <?php $terminort = $tagesid."090830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_0-->
					<tr <?php $terminort = $tagesid."090845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open8.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">8:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
	
<!--Eintrag 9_1-->
					<tr <?php $terminort = $tagesid."090900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_2-->
					<tr <?php $terminort = $tagesid."090915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."090915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_3-->
					<tr <?php $terminort = $tagesid."090930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."090930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_4-->
					<tr <?php $terminort = $tagesid."090945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open9.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">9:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."090945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												

<!--Eintrag 9_5-->
					<tr <?php $terminort = $tagesid."091000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_6-->
					<tr <?php $terminort = $tagesid."091015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_7-->
					<tr <?php $terminort = $tagesid."091030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_8-->
					<tr <?php $terminort = $tagesid."091045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">10:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_9-->
					<tr <?php $terminort = $tagesid."091100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_10-->
					<tr <?php $terminort = $tagesid."091115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_11-->
					<tr <?php $terminort = $tagesid."091130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_12-->
					<tr <?php $terminort = $tagesid."091145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">11:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_13-->
					<tr <?php $terminort = $tagesid."091200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_14-->
					<tr <?php $terminort = $tagesid."091215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_15-->
					<tr <?php $terminort = $tagesid."091230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_16-->
					<tr <?php $terminort = $tagesid."091245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">12:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_17-->
					<tr <?php $terminort = $tagesid."091300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_18-->
					<tr <?php $terminort = $tagesid."091315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_19-->
					<tr <?php $terminort = $tagesid."091330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_20-->
					<tr <?php $terminort = $tagesid."091345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">13:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_21-->
					<tr <?php $terminort = $tagesid."091400"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1400&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091400";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>						
<!--Eintrag 9_22-->
					<tr <?php $terminort = $tagesid."091415"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1415&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091415";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_23-->
					<tr <?php $terminort = $tagesid."091430"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1430&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091430";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_24-->
					<tr <?php $terminort = $tagesid."091445"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1445&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">14:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091445";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_25-->
					<tr <?php $terminort = $tagesid."091500"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1500&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091500";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_26-->
					<tr <?php $terminort = $tagesid."091515"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1515&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091515";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_27-->
					<tr <?php $terminort = $tagesid."091530"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1530&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091530";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_28-->
					<tr <?php $terminort = $tagesid."091545"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1545&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">15:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091545";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_29-->
					<tr <?php $terminort = $tagesid."091600"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1600&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091600";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_30-->
					<tr <?php $terminort = $tagesid."091615"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1615&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091615";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_31-->
					<tr <?php $terminort = $tagesid."091630"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1630&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091630";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_32-->
					<tr <?php $terminort = $tagesid."091645"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1645&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">16:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091645";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_33-->
					<tr <?php $terminort = $tagesid."091700"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1700&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091700";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_34-->
					<tr <?php $terminort = $tagesid."091715"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1715&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091715";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_35-->
					<tr <?php $terminort = $tagesid."091730"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1730&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091730";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_36-->
					<tr <?php $terminort = $tagesid."091745"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1745&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">17:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091745";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
									
<!--Eintrag 9_+1-->
					<tr <?php $terminort = $tagesid."091800"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1800&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091800";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 9_+2-->
					<tr <?php $terminort = $tagesid."091815"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1815&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091815";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_+3-->
					<tr <?php $terminort = $tagesid."091830"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1830&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091830";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_+4-->
					<tr <?php $terminort = $tagesid."091845"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1845&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">18:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091845";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 9_+5-->
					<tr <?php $terminort = $tagesid."091900"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open19.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1900&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091900";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>


												
<!--Eintrag 9_+6-->
					<tr <?php $terminort = $tagesid."091915"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1915&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091915";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_+7-->
					<tr <?php $terminort = $tagesid."091930"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1930&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091930";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_+8-->
					<tr <?php $terminort = $tagesid."091945"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=1945&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">19:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."091945";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
			

												
<!--Eintrag 9_+9-->
					<tr <?php $terminort = $tagesid."092000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open20.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."092000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
												
<!--Eintrag 9_+10-->
					<tr <?php $terminort = $tagesid."092015"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2015&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:15</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."092015";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_+11-->
					<tr <?php $terminort = $tagesid."092030"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2030&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:30</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."092030";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>
<!--Eintrag 9_+12-->
					<tr <?php $terminort = $tagesid."092045"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2045&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">20:45</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."092045";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

	

												
<!--Eintrag 9_+13-->
					<tr <?php $terminort = $tagesid."092100"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open21.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2100&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:00</a></td>
						<td class="termin">
											<?php
											$terminort = $tagesid."092100";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0 , 27)."</p><p class='mName'>".
													substr($termine[$terminort]['0']['vorname'], 0 , 10)." ".substr($termine[$terminort]['0']['nachname'], 0 , 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0 , 10);
				
												if (isset($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0 , 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></td></tr>

<!--Eintrag 9_+14-->
					<tr <?php $terminort = $tagesid."092115"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2115&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092115";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_+15-->
					<tr <?php $terminort = $tagesid."092130"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2130&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092130";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_+16-->
					<tr <?php $terminort = $tagesid."092145"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2145&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">21:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092145";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 9_+17-->
					<tr <?php $terminort = $tagesid."092200"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open22.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2200&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092200";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>					

<!--Eintrag 9_+14-->
					<tr <?php $terminort = $tagesid."092215"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2215&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092215";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_+15-->
					<tr <?php $terminort = $tagesid."092230"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2230&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092230";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_+16-->
					<tr <?php $terminort = $tagesid."092245"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2245&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">22:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092245";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 9_+17-->
					<tr <?php $terminort = $tagesid."092300"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open23.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2300&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092300";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>				

<!--Eintrag 9_+18-->
					<tr <?php $terminort = $tagesid."092315"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2315&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:15</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092315";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_+19-->
					<tr <?php $terminort = $tagesid."092330"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2330&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:30</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092330";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
<!--Eintrag 9_+20-->
					<tr <?php $terminort = $tagesid."092345"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=2345&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">23:45</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."092345";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>

	
<!--Eintrag 9_+21-->
					<tr <?php $terminort = $tagesid."090000"; if (isset ($termine[$terminort])) { echo 'class="'.$termine[$terminort]['0']['klasse'].'"';} else { echo 'class="'.$open0.'"';} ?>><td class="zeit"><a href="#" onclick="window.open('php/terminform.php?datum=<?php echo $tagesid ?>
					&raum=09&zeit=0000&nnl=<?php echo $nnl ?>','termineingabe','width=750,height=800,scrollbars=no,rezsizeable=yes,status=yes');">00:00</a></td>
						<td class="termin">
							<div class="termin_innen">
											<?php
											$terminort = $tagesid."090000";
												if (isset ($termine[$terminort])) {
													echo "<p class='mArt'>".substr($termine[$terminort]['0']['massageart'], 0, 27)."</p><p class='mName'>".substr($termine[$terminort]['0']['vorname'], 0, 10)." ".substr($termine[$terminort]['0']['nachname'], 0, 17)."</p><p class='mInfo'>".$termine[$terminort]['0']['dauer']." min. / ".substr($termine[$terminort]['0']['masseurin_1'], 0, 10);
				
												if (isset ($termine[$terminort]['0']['masseurin_2']) and ($termine[$terminort]['0']['masseurin_2'] !=="" )) {
													echo " / ".substr($termine[$terminort]['0']['masseurin_2'], 0, 9)."</p>"; }else { echo "</p>"; } If ($termine[$terminort]['0']['bemerkung'] != "") { echo "<p class='mBes'>".substr($termine[$terminort]['0']['bemerkung'], 0, 27)."</p>";}else {echo "<p class='mBes'>&nbsp;</p> ";}
												}?></div></td></tr>
												
				</table>
			</div>
		</div>
	</div>