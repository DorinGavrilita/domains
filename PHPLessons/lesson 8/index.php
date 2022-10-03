<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>8. Basic Functions</title>
</head>

<body>
	<div style="text-align:center; margin-top: 50px;">

		<?php
		$user = "Dorin";
		// isset — Определяет, была ли установлена переменная значением, отличным от null
		if (isset($user))
			echo "Variable exists. <br>";
		else
			echo "Variable doesn't exist. <br>";

		$str = "My name is Dorin!";
		// empty — Проверяет, пуста ли переменная
		if (empty($str))
			echo "String is empty.";
		else
			echo "There is something in the line. <br>";
		?>
	</div>

	<div style="text-align:center; margin-top: 50px;">
		<?php
		// gettype — Возвращает тип переменной
		echo gettype(123) . "<br>";
		echo gettype("123") . "<br>";
		echo gettype(true) . "<br>";
		echo gettype(15.02) . "<br>";
		echo gettype(null) . "<br>";
		?>
	</div>
	<div style="text-align:center; margin-top: 50px;">
		<?php
		// is_int — Проверяет, является ли переменная целым числом
		if (is_int(5))
			echo "Является целым числом";
		else
			echo "Не является целым числом";
		?>
	</div>
</body>

</html>