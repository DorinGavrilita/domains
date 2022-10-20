<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>7. Boolean and String data type. Quotes</title>
</head>

<body>
	<!-- Логический и строковый тип данных -->
	<?php
	$bool = true;
	$bool = false;
	?>
	<br>
	<?php
	echo $str = "Hello world! I'm Dorin.";
	?>
	<br>
	<?php
	echo "Hello world! '28.09.2022'<br>"; // Можно одинарные кавычки ставить в двойные и наоборот
	?>
	<?php
	$var = 2022;
	echo "Hello world! - \"$var\""; // '\' - экранизирует символы
	?>
	<br>
	<?php
	$var = 2022;
	echo "Hello world! - {$var}.28"; // Выводим переменную и текст/цифры рядом без пробела между ними
	?>
	<br>
	<?php
	$var = 2022;
	// echo `dir`;
	?>
</body>

</html>