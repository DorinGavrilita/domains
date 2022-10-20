<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator</title>
	<style type="text/css">
		.container {
			left: 25%;
			padding: 100px;
			text-align: center;
			border: 1px solid green;

		}

		input,
		select {
			width: 40%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #ccc;
			border-radius: 4px;
			box-sizing: border-box;
		}

		input[type=submit] {
			width: 10%;
			background-color: #4CAF50;
			color: white;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}
	</style>

</head>

<body>

	<div class="container">
		<form method="post" action="">
			<h1>Calculator</h1>
			<br>
			"Input at First Number For cos,sin and other functions."
			<br>
			First Number: <input name="n1" value="">
			<br>
			Second Number: <input name="n2" value="">
			<br>
			<input type="submit" name="calc" value="+">
			<input type="submit" name="calc" value="-">
			<input type="submit" name="calc" value="x">
			<input type="submit" name="calc" value="/">
			<br>
			<input type="submit" name="calc" value="cos">
			<input type="submit" name="calc" value="sin">
			<input type="submit" name="calc" value="tan">
			<input type="submit" name="calc" value="e">
			<br>
			<input type="submit" name="calc" value="log">
			<input type="submit" name="calc" value="pi">
			<input type="submit" name="calc" value="pow">
			<input type="submit" name="calc" value="sqrt">
			<br>
			<input type="submit" name="calc" value="max">
			<input type="submit" name="calc" value="min">
			<br>Result: <input type='text' value="<?php echo $sol; ?>"><br>
		</form>
	</div>
	<!-- <div class="button">
		<form method="post">
			<input type="submit" name="ans" value="Retrieve Data">
		</form>
	</div> -->

	<?php

	class Calculator
	{
		public $num1;
		public $num2;
		public $calc;

		public function __construct($num1, $calc, $num2,)
		{
			$this->num1 = $num1;
			$this->calc = $calc;
			$this->num2 = $num2;
		}

		public function Calculate()
		{
			switch ($this->calc) {
				case '+':
					$sol = $this->num1 + $this->num2;
					break;
				case '-':
					$sol = $this->num1 - $this->num2;
					break;
				case '*':
					$sol = $this->num1 * $this->num2;
					break;
				case '/':
					$sol = $this->num1 / $this->num2;
					break;
				case 'sqrt':
					$sol = sqrt($this->num1);
					break;
				case 'pow':
					$sol = $this->num1 ** $this->num2;
					break;
				case 'sin':
					$sol = sin($this->num1);
					break;
				case 'cos':
					$sol = cos($this->num1);
					break;

				default:
					return "Sorry No command found";
			}
		}
	}

	$num1 = $_POST['n1'];
	$calc = $_POST['calc'];
	$num2 = $_POST['n2'];

	$calculator = new Calculator($num1, $calc, $num2);
	?>


</body>

</html>