<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci PHP</title>
	<style type="text/css">
		.inputbox{
			width: 200px;
			height: 50px;
			font-size: 25px;
		}

		.submitbtn{
			width: 80px;
			height: 40px;
			font-size: 20px;
		}
		
	</style>
</head>
<body>
	<h2>Exercise 4 of FUNCION and RECURSION</h2>
	<h1 style="color: blue; text-align: center;">Fibonacci Calculation</h1>
	<br>
	<table>
		<tr>
			<form action="" method="post">
				<td><h3>Input Number : </h3></td>
				<td><input type="number" name="value" class="inputbox" placeholder="Number"></td>
				<td><input type="submit" name="submit" value="Submit" class="submitbtn"></td>
			</form>
		</tr>
	</table>
	
	<br>
	<hr style="height: 5px;background-color: black;">

	<?php
		

		// This is the value that php take from input field ---
		$number = $_POST['value'];

		// display Recursion from Function
		$start1 = microtime(true)*1000;
		echo "--- Recursion ---"."<br>";
		echo "Fibonacci of number ".$number." is  : ";
		echo fibonacci1($number);
		$end1 = microtime(true)*1000;
		echo "<br><br>";

		echo "Estimated time (RECURSION) : ";	
		echo $end1 - $start1;

		// -----------------------------------------
		echo "<br><br>";
		// display FOR Loop from Function
		$start2 = microtime(true)*1000;
		echo "<br>"."--- FOR Loop ---"."<br>";
		echo "Fibonacci of number ".$number." is  : ";
		echo fibonacci2($number);
		$end2 = microtime(true)*1000;
		echo "<br><br>";
		
		echo "Estimated Time (FOR Loop) : ";
		echo $end2 - $start2;
		


		// Fibonacci Function using " // RECURSION \\ "
		function fibonacci1($n){
			if($n==0){
				return 0;
			}
			elseif ($n==1) {
				return 1;
			}
			else{
				return fibonacci1($n-1)+fibonacci1($n-2);
			}

		}


		// Fibonacci Function using " || FOR Loop || "
		function fibonacci2($n) {
		    $a = 0;
		    $b = 1;
		    for ($i = 0; $i < $n; $i++) {
		        $t = $a + $b;
		        $a = $b;
		        $b = $t;
		    }
		    return $a;
		}

		
	?>

	<hr style="height: 3px;background-color: green;">
	<h2 style="color: lightblue;">Time Comparison : </h2>
	<p>Due to the 5 10 15 test to run the program : The one which is better is = <b>FOR Loop</b></p>

</body>
</html>


