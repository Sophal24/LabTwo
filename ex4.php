<?php
	echo "Exercise 4";
	echo "<br>";

	$arr = array
		(
			array('a','b','c'),
			array('d','e','f'),
			array('g','h','i'),
			array('j','k','l')
		);

	for ($row = 0; $row < 4; $row++) { 
		# code...
		for ($col = 0; $col < 3; $col++) { 
			# code...
			echo $arr[$row][$col]." ";

		}
		echo "<br>";
	}

	echo "<h1>Matrix Transpose : </h1>";
	echo "<br>";

	for ($row = 0; $row < 3; $row++) { 
		# code...
		for ($col = 0; $col < 4; $col++) { 
			# code...
			echo $arr[$col][$row]." ";

		}
		echo "<br>";
	}

?>