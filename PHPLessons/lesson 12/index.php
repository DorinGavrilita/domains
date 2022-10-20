<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>12. Scope of class variables</title> <!-- Области видимости переменных класса -->
</head>

<body>

	<?php
	require 'point.php';

	echo Point::$num . '<br>'; // Обращение к переменным вне класса без создания объекта этого класса

	$first = $second = 5;
	$first = 7;
	echo $first . '<br>' . $second . '<br>';

	$first = new Point;
	$first->x = 3;
	$first->y = 3;

	$second = $first;
	$second->x = 5;
	$second->y = 5;

	echo "x: {$first->x}, y: {$second->y} <br>";
	
	echo "<p>";
	
	$first= 9;
	$second = &$first;
	$second = 4;
	echo $first;

	echo "</p>";
	?>

</body>

</html>