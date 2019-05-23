<?php
	echo "Exercise 1";
	echo "<br>";

	// Find min max number in array
	
	$number = array(3 , -4 , 32 , -7 , 10 , -23 , 9);
		$max = $number[0];
		$min = $number[0];


		for ($i=0; $i < 7 ; $i++) { 
			
			if ($max < $number[$i]) {
				$max = $number[$i];
			}

			if ($min > $number[$i]) {
				$min = $number[$i];
			}
		}

		echo "Max Number : ".$max;
		echo "<br>";
		echo "Min Number : ".$min;

?>