<?php

	echo "Exercise 1 of FUNCION and RECURSION";
	echo "<br>";

	

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