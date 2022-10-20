<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>13. Distance between two points</title> <!-- Расстояние между двумя точками -->
</head>

<body bgcolor="silver">
	<p>
		<?php
		require 'point.php';

		$first = new Point;
		$first->x = 3;
		$first->y = 3;

		$second = clone $first; // clone - Клонировать объект а не указывать на него ссылку
		$second->x = 5;
		$second->y = 5;

		echo "x: {$first->x}, y: {$first->y} <br>";

		echo "x: {$second->x}, y: {$second->y} <br>";
		?>
	</p>

	<div class="">

		<?php
		echo '2^8 = ' . pow(2, 8) . "<br>"; // pow() - Возведение в степень

		echo 'Квадратный корень 16 = ' . sqrt(16);  // sqrt() - Квадратный корень
		?>
	</div>

	<div class="">

		<?php
		//  Расстояние между 2 точками

		$p1 = new Point;
		$p1->x = 10;
		$p1->y = 34;

		$p2 = new Point;
		$p2->x = 3;
		$p2->y = 10;

		$distance = sqrt(pow($p2->x - $p1->x, 2) + pow($p2->y - $p1->y, 2));
		echo $distance;
		?>
	</div>

</body>

</html>