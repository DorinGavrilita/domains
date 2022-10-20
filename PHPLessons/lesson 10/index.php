<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>10. Rounding numbers</title>
</head>

<body>
	<div style="margin: 50px;">

		<?php
		$tests = array(
			"42     ",
			1337,
			0x539,
			02471,
			0b10100111001,
			1337e0,
			"0x539",
			"02471",
			"0b10100111001",
			"1337e0",
			"not numeric",
			array(),
			9.1,
			null,
			' ',
		);

		echo "is_numeric — Проверяет, является ли переменная числом или строкой, содержащей число" . "<br>";
		foreach ($tests as $element) {
			// Возвращает true, если value является числом или строкой, содержащей число или false в противном случае.
			if (is_numeric($element)) {
				echo var_export($element, true) . " is numeric", PHP_EOL . "<br>"; //var_export() возвращает структурированную информацию о данной переменной. 
			} else {
				echo var_export($element, true) . " is NOT numeric", PHP_EOL . "<br>";
			}
		}
		?>
	</div>
	<div style="margin: 50px;">

		<?php
		echo "Примеры использования var_export()" . "<br>";
		$a = array(1, 2, array("a", "b", "c"));
		foreach ($a as $el) {
			if (is_array($el)) {
				foreach ($el as $str) {
					// isset — Определяет, была ли установлена переменная значением, отличным от null
					if (isset($str))
						echo var_export($str, true) . PHP_EOL . "<br>";
				}
			} else
				echo var_export($el, true) . PHP_EOL . "<br>";
		}
		?>
	</div>
	<div style="margin: 50px;">
		<?php
		echo "round — Округляет число типа float"  . "<br>";
		echo var_export(round(3.4)) . PHP_EOL . "<br>";
		echo var_export(round(3.5)) . PHP_EOL . "<br>";
		echo var_export(round(3.6)) . PHP_EOL . "<br>";
		echo var_export(round(3.6, 0)) . PHP_EOL . "<br>";
		echo var_export(round(5.045, 2)) . PHP_EOL . "<br>";
		echo var_export(round(5.055, 2)) . PHP_EOL . "<br>";
		echo var_export(round(345, -2)) . PHP_EOL . "<br>";
		echo var_export(round(345, -3)) . PHP_EOL . "<br>";
		echo var_export(round(678, -2)) . PHP_EOL . "<br>";
		echo var_export(round(678, -3)) . PHP_EOL . "<br>";
		?>
	</div>
	<div style="margin: 50px;">
		<?php
		echo "floor — Округляет дробь в меньшую сторону" . "<br>";
		echo floor(4.3) . "<br>";   // 4
		echo floor(9.999) . "<br>"; // 9
		echo floor(-3.14) . "<br>"; // -4
		?>
	</div>
	<div style="margin: 50px;">
		<?php
		echo "ceil — Округляет дробь в большую сторону" . "<br>";
		echo ceil(4.3) . "<br>";    // 5
		echo ceil(9.999) . "<br>";  // 10
		echo ceil(-3.14) . "<br>";  // -3
		?>
	</div>
	<div style="margin: 50px;">
		<?php
		echo  "decbin — Переводит число из десятичной системы счисления в двоичную " . "<br>";
		echo decbin(12) . "<br>";
		echo decbin(26) . "<br>";
		?>
	</div>

</body>

</html>