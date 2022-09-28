<?
// public function Calculate(){
	switch ($this->sign) {
		case 'addition':
			$ans = $this->$num1 + $this->num2;
			return $ans;
			break;
		case 'subtraction':
			$ans = $this->$num1 - $this->num2;
			return $ans;
			break;
		case 'multiplication':
			$ans = $this->$num1 * $this->num2;
			return $ans;
			break;
		case 'division':
			$ans = $this->$num1 / $this->num2;
			return $ans;
			break;
	}
// }