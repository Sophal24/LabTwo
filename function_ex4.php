<!DOCTYPE html>
<html>
<head>
	<title>Fibonacci PHP</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<h2>Exercise 4 of FUNCION and RECURSION</h2>
	<br>
	<table>
		<tr>
			<form action="" method="post">
				<td><h3>Input : </h3></td>
				<td><input type="number" name="value"></td>
				<td><input type="submit" name="submit" value="Submit"></td>
			</form>
		</tr>
	</table>
	
	
	<br>

	<?php
		$number = $_POST['value'];
		// $number = 7;

		echo "Fibonacci of number ".$number." is  : ";
		echo fibonacci($number);

		function fibonacci($n){
			if($n==0){
				return 0;
			}
			elseif ($n==1) {
				return 1;
			}
			else{
				return fibonacci($n-1)+fibonacci($n-2);
			}

		}
		
	?>

</body>
</html>


