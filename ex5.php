<?php
	echo "Exercise 5";
	echo "<br>";
	$a = array("a","b","c","d","e","f","g","h","i");
	$b = array("j","k","l","m","n","p","x","y","z");
	$c = array();
	for ($i=0; $i <sizeof($a) ; $i++) { 
		$c[$i] = $a[$i]."+".$b[$i];
		echo "$c[$i]";
		echo "<br>";
	}	
?>