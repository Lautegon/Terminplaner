<?php
	function getStorno() {
		global $stornos;
		echo "<tr><th colspan='3'>Termine Storno</th></tr>";
	
		
		foreach ($stornos as $key => $storno) {
			$jahr_st = "20".substr($key, 0, 2);
			$monat_st = substr($key, 2, 2);
			$tag_st = substr($key, 4, 2);
			$stunde_st = substr($key, 8, 2);
			$minute_st = substr($key, 10, 2);
			
			echo '<tr><td>'.$stunde_st.':'.$minute_st.'</td><td><p class="mArt">'.$storno[0]['massage_st'].'</p><p class="mName">'.$storno[0]['vorname_st'].' '.$storno[0]['nachname_st'].'</p><p class="mBes">'.$storno[0]['stornogrund'].'</p></td></tr>';
		}
	}







?>