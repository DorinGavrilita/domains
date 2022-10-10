<?php
class Employee
{
	// Свойства класса
	public $name;
	public $age;
	public $salary;

	public function getName()
	{
		return $this->name;
	}
	public function getAge()
	{
		return $this->age;
	}
	public function getSalary()
	{
		return $this->salary;
	}
	public function checkAge()
	{
		if ($this->age > 18)
			return 'true';
		else
			return 'false';
	}
	public function doubleSalary()
	{
		echo $this->salary * 2;
	}
}

// Создаем объект нашего класса:
$employee1 = new Employee;
$employee1->name = 'John';
$employee1->age = 98;
$employee1->salary = 1500;
$employee2 = new Employee;
$employee2->name = 'Eric';
$employee2->age = 26;
$employee2->salary = 1900;


echo $employee1->getSalary() + $employee2->getSalary() . " $";
echo '<br>';
echo "Sum salary = " . $employee1->salary + $employee2->salary . " $";
echo '<br>';
echo "Sum age = " . $employee1->age + $employee2->age . " years";
echo '<br>';
echo $employee1->checkAge();
echo '<br>';
echo $employee1->doubleSalary();
echo '<br>';
?>

<?php
class User
{
	public $name;
	public $age;
	// Создаем метод:
	// Метод для изменения возраста юзера:
	public function setAge($age)
	{
		if ($this->age >= 18)
			$this->age = $age;
	}
}

// Создаем объект нашего класса:
$user = new User;
$user->name = 'John';
$user->age = 20;

echo $user->age;
$user->setAge(30);
echo '<br>';
echo $user->age;

?>

<?php
class Rectangle
{
	public $width;
	public $height;

	public function getSquare()
	{
		return $this->width * $this->height;
	}
	public function getPerimeter()
	{
		return ($this->width + $this->height) * 2;
	}
}

$rect = new Rectangle;
$rect->width = 5;
$rect->height = 15;

echo $rect->getSquare();
echo '<br>';
echo $rect->getPerimeter();
?>

<?php
class UserN
{
	public $name;
	public $age;

	// Метод для проверки возраста:
	private function isAgeCorrect($age)
	{
		return $age >= 18 and $age <= 60;
	}

	// Метод для изменения возраста юзера:
	public function setAge($age)
	{
		// Проверим возраст на корректность:
		if ($this->isAgeCorrect($age)) {
			echo $this->age = $age;
			echo '<br>';
		}
	}

	// Метод для добавления к возрасту:
	public function addAge($years)
	{
		$newAge = $this->age + $years; // вычислим новый возраст

		// Проверим возраст на корректность:
		if ($this->isAgeCorrect($newAge)) {
			echo $this->age = $newAge; // обновим, если новый возраст прошел проверку 
			echo '<br>';
		}
	}

	public function subAge($years)
	{
		$newAge = $this->age - $years; // вычислим новый возраст

		// Проверим возраст на корректность:
		if ($this->isAgeCorrect($newAge)) {
			echo $this->age = $newAge . "<br>"; // обновим, если новый возраст прошел проверку 
			echo '<br>';
		}
	}
}

$user = new UserN;

$user->setAge(20);

$user->addAge(5);

$user->subAge(5);
