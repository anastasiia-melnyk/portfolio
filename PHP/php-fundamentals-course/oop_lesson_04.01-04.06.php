<?php
/*
Завдання 4.1. Створіть клас Employee (працівник), у якого будуть такі властивості: name (ім'я), age 
(вік), salary (зарплата).

Завдання 4.2. Створіть у класі Employee метод getName, який повертатиме ім'я працівника.

Завдання 4.3. Створіть у класі Employee метод getAge, який повертатиме вік працівника.

Завдання 4.4. Створіть у класі Employee метод getSalary, який повертатиме зарплату працівника.

Завдання 4.5. Створіть у класі Employee метод checkAge, який буде перевіряти, що працівникові більше 18
років і буде повертати true, якщо це так, і false, якщо це не так.

Завдання 4.6. Створіть два об'єкти класу Employee, присвойте їхнім властивостям будь-які значення. За
допомогою методу getSalary знайдіть суму зарплат створених працівників.
*/

class Employee
{
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
		if ($this->age > 18) {
			return $this->age > 18;
		}
	}
}

$employee1 = new Employee();
$employee1->name = 'Tetiana';
$employee1->age = 25;
$employee1->salary = 3000;

$employee2 = new Employee();
$employee2->name = 'Hanna';
$employee2->age = 18;
$employee2->salary = 1000;

echo $employee1->getSalary() + $employee2->getSalary();