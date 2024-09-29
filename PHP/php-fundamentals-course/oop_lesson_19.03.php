<?php
/*
Завдання 19.3. Створіть клас Programmer, який буде наслідувати від класу Employee. Нехай новий клас має
властивість langs, у якій зберігатиметься масив мов, якими володіє програміст. Зробіть також геттер і
сеттер для цієї властивості.
*/

class User
{
	private $name;
	private $age;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		return $this->age = $age;
	}
}

class Employee extends User
{
	private $salary;

	public function getSalary()
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
}

class Programmer extends Employee
{
	private $langs = [];

	public function getLangs()
	{
		$langs = $this->langs;
		foreach ($langs as $elem) {
			echo $elem.' ';
		};
	}

	public function setLangs($langs = [])
	{
		$this->langs = $langs;
	}
}

// Створюємо об'єкт класу Programmer
$programmer = new Programmer;

// Встановлюємо значення для властивостей
$programmer->setName('Olesia');
$programmer->setAge(28);
$programmer->setSalary(8000);
$programmer->setLangs(['PHP', 'JavaScript', 'Python']);

// Отримуємо значення властивостей
$name = $programmer->getName();
$age = $programmer->getAge();
$salary = $programmer->getSalary();

// Виводимо результати
echo "Name: " . $name . "\n"; 
echo "Age: " . $age . "\n";
echo "Salary: " . $salary . "\n";
echo "Programming languages: ";
$programmer->getLangs();