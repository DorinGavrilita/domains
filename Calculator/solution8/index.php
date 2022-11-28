<?php
$result = "";
class PHP_Calculator
{
	var $Number1;
	var $Number2;

	function Action($operator)
	{
		switch ($operator) {
			case '+':
				return $this->x + $this->y;
				break;

			case '-':
				return $this->x - $this->y;
				break;

			case '*':
				return $this->x * $this->y;
				break;

			case '/':
				return $this->x / $this->y;
				break;

			default:
				return "Sorry No command found";
		}
	}
	function getresult($Number1, $Number2, $c)
	{
		$this->x = $Number1;
		$this->y = $Number2;
		return $this->Action($c);
	}
}

$cal = new PHP_Calculator();
if (isset($_POST['op'])) {
	if (!empty($_POST['No1'] or $_POST['No2'])) {
		$result = $cal->getresult($_POST['No1'], $_POST['No2'], $_POST['op']);
	} else
		echo "Enter the number";
}
?>

<form method="post">
	<table align="center">
		<tr>
			<td><strong><?php echo $result; ?><strong></td>
		</tr>
		<tr>
			<td>Please Enter 1st Number</td>
			<td><input type="number" name="No1"></td>
		</tr>

		<tr>
			<td>Please Enter 2nd Number</td>
			<td><input type="number" name="No2"></td>
		</tr>

		<tr>
			<td>Select Operator</td>
			<td>
					<input type="submit" name="op" value="+">
					<input type="submit" name="op" value="-">
					<input type="submit" name="op" value="*">
					<input type="submit" name="op" value="/">
				</td>
		</tr>

		<tr>
			<td></td>
			<!-- <td><input type="submit" name="submit" value="                =                "></td> -->
		</tr>

	</table>
</form>