<?php
	echo "Exercise 3 of FUNCION and RECURSION";
	echo "<br>";
	
	echo "ax + by + c";
	$a = 1;
	$b = 2;
	$c = 1;
	$x1 = 0;
	$x2 = 0;
	$delta = $b*$b - 4*$a*$c;
	if($delta == 0){
		$x1 = -$b/2*$a;
		$x2 = $x1;
	}
	else if($delta > 0){
		$x1 = (-$b + sqrt($delta))/2*$a; 
		$x2 = (-$b - sqrt($delta))/2*$a; 
	}
	else{
		echo "There is no root";
	}
	echo "<br>";
	echo "x1 = $x1";
	echo "<br>";
	echo "x2 = $x2";
?>