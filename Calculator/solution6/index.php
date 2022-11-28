<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Calculator 6</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

	<?php
	$num1 = ' ';
	class Calculator
	{
		public $num1;
		public $num2;
		public $calc;

		public function __construct($num1, $num2, $calc)
		{
			$this->num1 = $num1;
			$this->num2 = $num2;
			$this->calc = $calc;
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

	$num1 = $_POST['sub'];
	echo $num1;

	// $solution = new Calculator($num1,);

	?>


	<main>
		<!-- <h3>Calculator 6</h3> -->

		<form class="container" method="POST">
			<div class="display-top">
				<div class="display-1">0</div>
				<div class="display-2">0</div>
				<div class="temp-result"><?php echo $num1; ?></div>
			</div>
			<section class="all_buttons" id="calculator-buttons">
				<!--(Memory Clear) -стереть данные из ячейки памяти.-->
				<button type="button" name="sub" value="mc">MC</button>
				<!--(Memory Read) -считать число из ячейки памяти и вывести его на дисплей.-->
				<button type="button" name="sub" value="mr">MR</button>
				<!-- MS (Memory Save) -сохранить число, отображенное в данный момент на дисплее калькулятора в память.-->
				<button type="submit" name="sub" value="ms">MS</button>
				<button type="button" name="sub" value="m+">M+</button> <!-- M+ - добавление числа которое на экране к памяти -->
				<button type="button" name="sub" value="m-">M-</button> <!-- М- - вычитание числа, которое на экране из памяти -->
				<button type="button" name="sub" value="(">(</button>
				<button type="button" name="sub" value=".">.</button>
				<button type="button" name="sub" value=")">)</button>
				<button type="button" name="sub" value="C">C</button>
				<button class="all-clean" type="button" name="sub" value="AC">AC</button>
				<button type="button" name="sub" value="7">7</button>
				<button type="button" name="sub" value="8">8</button>
				<button type="button" name="sub" value="9">9</button>
				<button type="button" name="sub" value="/">/</button>
				<button type="button" name="sub" value="abs">abs</button>
				<button type="button" name="sub" value="4">4</button>
				<button type="button" name="sub" value="5">5</button>
				<button type="button" name="sub" value="6">6</button>
				<button type="button" name="sub" value="*">*</button>
				<button type="button" name="sub" value="mod">mod</button>
				<button type="button" name="sub" value="1">1</button>
				<button type="button" name="sub" value="2">2</button>
				<button type="button" name="sub" value="3">3</button>
				<button type="button" name="sub" value="-">-</button>
				<button type="button" name="sub" value="+">+</button>
				<button type="button" name="sub" value="0">0</button>
				<button type="button" name="sub" value="cos">cos</button>
				<button type="button" name="sub" value="sin">sin</button>
				<button type="button" name="sub" value="+/-">+/-</button>
				<button type="button" name="sub" value="=">=</button>
			</section>
			<div class="display-bottom">
				<div class="display-3">BIN: 0</div>
				<div class="display-4">OCT: 0</div>
				<div class="display-5">HEX: 0</div>
			</div>
		</form>
	</main>


</body>

</html>