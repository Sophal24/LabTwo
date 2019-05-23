<?php
	echo "Exercise 2";
	echo("<br>");
	$b = array(4 , 12 , 31 , 23 , 7 , 54 , 13 , 8 , 13);
	$even = array();
	$odd = array();
	$cEven = 0;
	$cOdd = 0;
	for($i = 0; $i<= sizeof($b); $i++){
		if($b[$i] % 2 == 0){
			$even[$cEven] = $b[$i];
			$cEven++;

		}
		else{
			$odd[$cOdd] = $b[$i];
			$cOdd++;
		}
	}
	for($s = 0; $s <= sizeof($even); $s++){
		echo "$even[$s]";
		echo " ";
	}
	echo("<br>");
	for($s = 0; $s <= sizeof($odd); $s++){
		echo "$odd[$s]";
		echo " ";
	}
?>