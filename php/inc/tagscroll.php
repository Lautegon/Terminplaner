<?php
		//Datum ($tagesid) einen Tag zurück scrollen
			//Funktion 1 Tag zurück, Kalender wird berücksichtigt
				//Tagesid -> in Timestamp -> Dann zurück als Tagesid
		function dayBack() {
			$tgdate = time();
			if (isset($_GET['tagesid']) && !empty($_GET['tagesid'])){
					$tagesid = $_GET['tagesid'];
			} 
			else {
					$tagesid = date("y",$tgdate).date("m",$tgdate).date("d",$tgdate);
			}
					$jaHr = substr($tagesid,-6,2);
					$mO = substr($tagesid,-4,2);
					$tG = substr($tagesid,-2,2);
		
			$tagesidminus = "20".$jaHr.$mO.$tG."00:00:00";
			$idZurueck = strtotime("-1 day", strtotime($tagesidminus));
			$backzeit = date("ym",$idZurueck).sprintf("%02d",date("d",$idZurueck));
			return $backzeit;		
		}
			//Funktion 1 Tag vor, Kalender wird berücksichtigt
		function dayForward() {
			$tgdate = time();
			if (isset($_GET['tagesid']) && !empty($_GET['tagesid'])){
					$tagesid = $_GET['tagesid'];
			} 
			else {
					$tagesid = date("y",$tgdate).date("m",$tgdate).date("d",$tgdate);
			}
					$jaHr = substr($tagesid,-6,2);
					$mO = substr($tagesid,-4,2);
					$tG = substr($tagesid,-2,2);
		
			$tagesidplus = "20".$jaHr.$mO.$tG."00:00:00";
			$idForward = strtotime("+1 day", strtotime($tagesidplus));
			$forwardzeit = date("ym",$idForward).sprintf("%02d",date("d",$idForward));
			return $forwardzeit;		
		}
?>