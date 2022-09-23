<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>
<body>

	<form method="GET">
		

		<input type="text" name="num1" placeholder="Number1">


		<input type="text" name="num2" placeholder="Number2">


	    <select name="operate">
	    	<option>None</option>
	    	<option>Add</option>
	    	<option>Subtract</option>
	    	<option>multiply</option>
	    	<option>Divide</option>
	    </select><br><br><br>


	    <button type="submit" name="submit" value="submit" >Calculate</button>
	</form>


	<h2>The answer is: </h2>

	<?php

if (isset($_GET['submit'])) {
	

	$number1 = $_GET['num1'];
	$number2 = $_GET['num2'];
	$operator = $_GET['operate'];

	switch ($operator) {
		case 'None':
			echo "Please select a method";
			break;
		
		case 'Add':
			echo $number1 + $number2 ;
			break;

		case 'Subtract':
			echo $number1 - $number2 ;
			break;

		case 'multiply':
			echo $number1 * $number2 ;
			break;

		case 'Divide':
			echo $number1 % $number2 ;
			break;

		default:
			
	}
}







	?>

</body>
</html>