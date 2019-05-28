<?php
	echo "Exercise 5";
	echo "<br>";

	$a = array(array("a","b","c"),array("d","e","f"),array("g","h","i"));
	$b = array(array("j","k","l"),array("m","n","p"),array("x","y","z"));
	$c = array(array(),array(),array());
	

	for ($i=0; $i < sizeof($a); $i++) { 
		for ($j=0; $j < sizeof($b); $j++) { 
			# code...
			$c[$i][$j] = $a[$i][$j]." + ".$b[$i][$j]." ";
			echo $c[$i][$j];
		}
		echo "<br>";
	}
?>