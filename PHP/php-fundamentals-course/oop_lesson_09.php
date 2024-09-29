<?php
/*
Завдання 9.1. Створіть клас Employee, у якого будуть такі властивості: name (ім'я), surname (прізвище),
salary (зарплата).

Завдання 9.2. Зробіть так, щоб властивості name і surname були доступні тільки для читання, а
властивість salary - і для читання, і для запису.
*/

class Employee
{
	public $name;
	public $surname;
	public $salary;

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

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
$employee = new Employee();

// Встановлюємо значення
$employee->name = "Angelina";
$employee->surname = "Buzko";
$employee->setSalary(50000);

// Виводимо результати
echo "Name: " . $employee->getName() . "\n";
echo "Surname: " . $employee->getSurname() . "\n";
echo "Salary: " . $employee->getSalary() . "$\n";

// Змінюємо зарплату
$employee->setSalary(60000);
echo "Updated Salary: " . $employee->getSalary() . "$\n";