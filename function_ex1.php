<?php

	



	/*if($hour <= 11 && $format == "AM"){
		if($hour == 12 && $format == "AM"){
			echo "Good Morning";
		}
		else if($minute >= 0 && $minute <= 59 && $second >= 0 && $second <= 59 && $format == "AM"){
			echo "Good Morning";
		}
		else{
			echo "Good Morning";
		}
		
	}
	else if($hour >= 1 && $hour <= 6 && $format == "PM"){
		if($hour == 12 || $hour == 1){
			if($format == "PM"){
				echo "Good Afternoon";
			}
			
		}
		else{
			echo "Good Afternoon";
		}
	}
	else if($hour > 6 && $hour <= 11 && $format == "PM") { 
		if($minute >= 0 && $minute <= 59 && $second >= 0 && $second <= 59 && $format == "PM"){
			echo "Good Evening";
		}
	}*/





	

	// Set to default time zone (for Cambodia) - able to show same time to COMPUTER
	date_default_timezone_set('Asia/Bangkok');
	$date = date("d/m/y");
	$time1 = date("h:i:s a"); 
	
	echo "Date : ".$date."<br>";
	echo "Time : ".$time1."<br>";

	// 24-hour format of an hour without leading zeros (0 through 23)
	$Hour = date('G');
	echo $Hour;

	if ( $Hour >= 5 && $Hour <= 11 ) {
	    
	    echo "<h1 style='text-align: center;color: blue;'>Good Morning</h1>";
	} else if ( $Hour >= 12 && $Hour <= 18 ) {
	    
	    echo "<h1 style='text-align: center;color: blue;'>Good Afternoon</h1>";
	} else if ( $Hour >= 19 || $Hour <= 4 ) {
	    
	    echo "<h1 style='text-align: center;color: blue;'>Good Evening</h1>";
	}

?>