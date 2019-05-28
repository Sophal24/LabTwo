<?php

	echo "Exercise 1 of FUNCION and RECURSION";
	echo "<br>";
	echo date("h : i : s A");
	$hour = date("h");
	$minute = date("i");
	$second = date("s");
	$format = date("A");
	echo "<br>";

	if($hour >= 1 && $hour <= 11){
		echo "Good Morning";
	}
	else if($hour >= 12 && $hour <= 18){
		echo "Good Afternoon";
	}
	else if($hour >= 19 && $hour <= 24){
		echo "Good evening";
	}






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



?>