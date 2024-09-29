<?php
/*
Завдання 19.1. Використовуючи приклад коду із уроку, створіть такі ж класи User та Employee.
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
		$this->age = $age;
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

// Перевірка

// Створюємо об'єкт класу Employee
$employee = new Employee;

// Встановлюємо значення для властивостей
$employee->setName('Taras');
$employee->setAge(30);
$employee->setSalary(2000);

// Отримуємо значення властивостей
$name = $employee->getName();
$age = $employee->getAge();
$salary = $employee->getSalary();

// Виводимо результати
echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Salary: " . $salary . "\n";