<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>11. OOP: Classes and Objects</title>
</head>

<body>
	<?php
	require 'point.php';

	$point1 = new Point;
	$point1->x = 13;
	$point1->y = 2;
	echo $point1->x . '<br>';

	$point2 = new Point;
	$point2->x = 15;
	$point2->y = 46;
	echo $point2->x . '<br>';

	unset($point1); // unset() удаляет перечисленные переменные.
	// echo $point1->x . '<br>';

	?>
</body>

</html>