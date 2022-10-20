<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>9. Explicit and implicit type conversion</title> <!-- Явное и неявное приведение типов -->
</head>

<body>
	<div style="margin: 50px;">
		<?php
		// Неявное приведение типов
		$str = '45.2gghjjjgf';
		$number = $str - 12;
		echo $number . "<br>";
		// Преобразование к логическому типу
		$var = '0';
		if ($var) {
			echo '$var variable is treated as true';
		} else {
			echo '$var variable is treated as false';
		}
		?>
	</div>
	<div style="margin: 50px;">
		<?php
		// Явное приведение типов
		$float = 4.3;
		$number = (int)$float;
		echo $number;
		?>
	</div>
	<div style="margin: 50px;">
		<?php
		// Как узнать чётность числа с помощью приведения типов
		$num = 50;
		$f = (float)($num / 2) - (int)($num / 2);
		if ($f) {
			echo 'Odd number.'; // Нечётное 
		} else
			echo 'Even number';  // Чётное
		?>
	</div>

</body>

</html>