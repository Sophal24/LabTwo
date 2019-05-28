<?php
	echo "Exercise 5";
	echo "<br>";
	$a = array(array("a","b","c"),array("d","e","f"),array("g","h","i"));
	$b = array(array("j","k","l"),array("m","n","o"),array("p","q","r"));
	$result = array(array(),array(),array());
	for($r = 0; $r < sizeof($a); $r++){
		for($c = 0;$c <sizeof($b);$c++){
			$result[$r][$c] = $a[$r][$c]."+".$b[$r][$c];
		}
	}
	print_r($result)

?>