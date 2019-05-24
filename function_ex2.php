<?php
	echo "Exercise 2 of FUNCION and RECURSION";
	echo "<br>";
	echo "<br>";

	

	function surfaceCyclinder($radius,$height){

		$Area = (2*pi()*$radius*$height) + (2*pi()*$radius*$radius);

		echo "$Area";
	}

	$r = 3;
	$h = 4;
	echo "Rarius : ".$r."<br>";
	echo "Height : ".$h."<br>";

	echo "<h2>Surface of Cyclinder : </h2>";
	// echo "<br>";

	surfaceCyclinder($r,$h);
	
?>