<?php

class Calc
{
	public $num1;
	public $sign;
	public $num2;
	private function __construct($num1, $sign, $num2)
	{
		$this->num1 = $num1;
		$this->sign = $sign;
		$this->num2 = $num2;
	}
};
