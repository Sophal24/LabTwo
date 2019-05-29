<!DOCTYPE html>
<html>
<head>
	<title>Cyclinder</title>
</head>
<body>
	<h2>Exercise 2 of FUNCION and RECURSION</h2>
	<form action="" method="post">
		<table>
			<tr>
				<td>Set Radius : </td>
				<td><input type="number" name="radius"></td>
			</tr>
			<tr>
				<td>Set Height : </td>
				<td><input type="number" name="height"></td>
			</tr>
			<tr>
				<td><input type="submit" name="submit" value="Submit"></td>
			</tr>
		</table>
		
	</form>
	

	<?php

		$getRadius = $_POST['radius'];
		$getHeight = $_POST['height'];

		function surfaceCyclinder($radius,$height){

			$Area = (2*pi()*$radius*$height) + (2*pi()*$radius*$radius);

			echo "$Area";
		}

		echo "<h2>Surface of Cyclinder : </h2>";
		// echo "<br>";

		surfaceCyclinder($getRadius,$getHeight);
		
	?>

</body>
</html>



