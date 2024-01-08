<?php
if( isset($_REQUEST['timestamp'])) $date = $_REQUEST['timestamp'];
else $date = time();

$arrMonth = array(
    "January" => "Januar",
    "February" => "Februar",
    "March" => "M&auml;rz",
    "April" => "April",
    "May" => "Mai",
    "June" => "Juni",
    "July" => "Juli",
    "August" => "August",
    "September" => "September",
    "October" => "Oktober",
    "November" => "November",
    "December" => "Dezember"
);
    
$headline = array('Mo','Di','Mi','Do','Fr','Sa','So');


function yearBack( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp),date("d",$timestamp),date("Y",$timestamp)-1 );
}
function monthBack( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp)-1,date("d",$timestamp),date("Y",$timestamp) );
}
function monthForward( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp)+1,date("d",$timestamp),date("Y",$timestamp) );
}
function yearForward( $timestamp ){
    return mktime(0,0,0, date("m",$timestamp),date("d",$timestamp),date("Y",$timestamp)+1 );
}


function getCalender($date,$headline = array('Mo','Di','Mi','Do','Fr','Sa','So')) {
    $sum_days = date('t',$date);
    $LastMonthSum = date('t',mktime(0,0,0,(date('m',$date)-1),0,date('Y',$date)));

	
		//Feiertage einbinden
			$YY = date("Y",$date);
			$tag = 24*60*60;
			$ostern = easter_date($YY);
			$advent4 = strtotime("last Sunday",mktime(0,0,0,12,25,$YY));
 
				$feiertag["neujahr"]                   = date("d.m.Y",mktime(0,0,0,1,1,$YY));
				$feiertag["heilige_drei_koenige"]      = date("d.m.Y",mktime(0,0,0,1,6,$YY));
				$feiertag["karfreitag"]                = date("d.m.Y",$ostern - (2*$tag));
				$feiertag["ostermontag"]               = date("d.m.Y",$ostern + (1*$tag));
				$feiertag["tag_der_arbeit"]            = date("d.m.Y",mktime(0,0,0,5,1,$YY));
				$feiertag["christi_himmelfahrt"]       = date("d.m.Y",$ostern + (39*$tag));
				$feiertag["pfingstmontag"]             = date("d.m.Y",$ostern + (50*$tag));
				$feiertag["fronleichnam"]              = date("d.m.Y",$ostern + (60*$tag));
				$feiertag["maria_himmelfahrt"]         = date("d.m.Y",mktime(0,0,0,8,15,$YY));
				$feiertag["tag_der_deutschen_einheit"] = date("d.m.Y",mktime(0,0,0,10,3,$YY));
				$feiertag["allerheiligen"]             = date("d.m.Y",mktime(0,0,0,11,1,$YY));
				$feiertag["weihnachtstag1"]            = date("d.m.Y",mktime(0,0,0,12,25,$YY));
				$feiertag["weihnachtstag2"]            = date("d.m.Y",mktime(0,0,0,12,26,$YY));
		
				
    
    foreach( $headline as $key => $value ) {
	if($value == 'So') {
		echo "<div class=\"day headline sun\">".$value."</div>\n";
	}
	else {
        echo "<div class=\"day headline\">".$value."</div>\n";
    }
	}
    
    for( $i = 1; $i <= $sum_days; $i++ ) {
        $day_name = date('D',mktime(0,0,0,date('m',$date),$i,date('Y',$date)));
        $day_number = date('w',mktime(0,0,0,date('m',$date),$i,date('Y',$date)));
		
		
        //Feststellen ob der Tag im letzten Monat liegt
        if( $i == 1) {
            $s = array_search($day_name,array('Mon','Tue','Wed','Thu','Fri','Sat','Sun'));
            for( $b = $s; $b > 0; $b-- ) {
                $x = $LastMonthSum-$b;
					echo "<div class=\"day before\">".sprintf("%02d",$x)."</div>\n";
            }
        }
		
		//Ausgabe Feiertag
		$aktuell = sprintf("%02d",$i).".".date("m.Y",$date);
		if(in_array($aktuell,$feiertag) == true) {
			 echo "<div class=\"day feiertag\"><a href=\"Buchungen.php?timestamp=".$date."&tagesid=".date("ym",$date).sprintf("%02d",$i)."\"class=\"taglink\">".sprintf("%02d",$i)."</a></div>\n";
			 continue;
		}

		//Feststellen ob der aktuelle Tag ein Sonntag ist --> Ausgabe

        if( $i == date('d',$date) && date('m.Y',$date) == date('m.Y')&& $day_name == 'Sun') {
            echo "<div class=\"day current sun\"><a href=\"Buchungen.php?timestamp=".$date."&tagesid=".date("ym",$date).sprintf("%02d",$i)."\"class=\"taglink\">".sprintf("%02d",$i)."</a></div>\n";
			continue;
        }
	
		//wenn nicht Aktueller Tag Sonntag --> Rot einfärben
		if($day_name == 'Sun') {
			echo "<div class=\"day sun\"><a href=\"Buchungen.php?timestamp=".$date."&tagesid=".date("ym",$date).sprintf("%02d",$i)."\"class=\"taglink\">".sprintf("%02d",$i)."</a></div>\n";
			continue;
		}
		
		
		//Ausgabe wenn aktueller Tag weder Sonntag noch Feiertag ist
        if( $i == date('d',$date) && date('m.Y',$date) == date('m.Y')) {
            echo "<div class=\"day current\"><a href=\"Buchungen.php?timestamp=".$date."&tagesid=".date("ym",$date).sprintf("%02d",$i)."\"class=\"taglink\">".sprintf("%02d",$i)."</a></div>\n";
			continue;
        }
		

		//Normale Tage Ausgeben
		else {
            echo "<div class=\"day normal\"><a href=\"Buchungen.php?timestamp=".$date."&tagesid=".date("ym",$date).sprintf("%02d",$i)."\"class=\"taglink\">".sprintf("%02d",$i)."</a></div>\n";
        }
        
		//Tage des nächsten Monat Ausgeben
		
        if( $i == $sum_days) {
            $next_sum = (6 - array_search($day_name,array('Mon','Tue','Wed','Thu','Fri','Sat','Sun')));
            for( $c = 1; $c <=$next_sum; $c++) {
                echo "<div class=\"day after\"> ".sprintf("%02d",$c)." </div>\n"; 
            }
        }
    }
}

?>