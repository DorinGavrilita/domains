<?php
class Calc
{
	public $num1;
	public $sign;
	public $num2;

	public function  __construct($num1, $num2, $sign)
	{
		$this->num1 = $num1;
		$this->sign = $sign;
		$this->num2 = $num2;
	}
	
	public function Calculate()
	{
		switch ($this->sign) {
			case 'addition':
				$ans = $this->num1 + $this->num2;
				echo $ans;
				break;
			case 'subtraction':
				$ans = $this->num1 - $this->num2;
				return $ans;
				break;
			case 'multiplication':
				$ans = $this->num1 * $this->num2;
				return $ans;
				break;
			case 'division':
				$ans = $this->num1 / $this->num2;
				return $ans;
				break;
		}
	}
}
