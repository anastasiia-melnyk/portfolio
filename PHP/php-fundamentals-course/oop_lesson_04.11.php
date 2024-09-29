<?php
/*
Завдання 4.11. Створіть клас Employee (працівник), у якого будуть такі властивості: name (ім'я),
salary (зарплата). Створіть метод doubleSalary, який буде збільшувати поточну зарплату у 2 рази.
*/

class Employee
{
	public $name;
	public $salary;

	public function doubleSalary()
	{
		return $this->salary *= 2;
	}
}

$employee = new Employee();
$employee->name = 'Oleksiy';
$employee->salary = 3000;

echo $employee->doubleSalary();