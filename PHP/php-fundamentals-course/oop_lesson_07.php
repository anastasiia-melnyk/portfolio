<?php
/*
Завдання 7.1. Створіть клас Employee, у якого будуть такі публічні властивості: name (ім'я), age (вік),
salary (зарплата). Зробіть так, щоб ці властивості заповнювалися в методі __construct під час створення
об'єкта.

Завдання 7.2. Створіть об'єкт класу Employee з ім'ям 'Андрій', віком 25, зарплатою 1000.

Завдання 7.3. Створіть об'єкт класу Employee з ім'ям 'Дмитро', віком 30, зарплатою 2000.

Завдання 7.4. Виведіть на екран суму зарплат Андрія та Дмитра.
*/

class Employee
{
	public $name;
	public $age;
	public $salary;

	public function __construct($name, $age, $salary)
	{
		$this->name = $name;
		$this->age = $age;
		$this->salary = $salary;
	}
}

$employee1 = new Employee('Andriy', 25, 1000);

$employee2 = new Employee('Hanna', 30, 2000);

echo $employee1->salary + $employee2->salary;