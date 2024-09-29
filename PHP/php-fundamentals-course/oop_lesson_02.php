<?php
/*
Завдання 2.1. Створіть клас Employee (працівник), у якого будуть такі властивості: name (ім'я), age
(вік), salary (зарплата).

Завдання 2.2. Створіть об'єкт класу Employee та присвойте його властивостям такі значення: ім'я -
'Андрій', вік - 25, зарплата - 1000.

Завдання 2.3. Створіть другий об'єкт класу Employee, присвойте його властивостям такі значення: ім'я -
'Дмитро', вік - 26, зарплата - 2000.

Завдання 2.4. Виведіть на екран суму зарплат Андрія та Дмитра.

Завдання 2.5. Виведіть на екран суму віку Андрія та Дмитра.
*/

class Employee
{
	public string $name;
	public int $age;
	public float $salary;
}

$employee1 = new Employee();
$employee1->name = 'Andriy';
$employee1->age = 25;
$employee1->salary = 1000;

$employee2 = new Employee();
$employee2->name = 'Hanna';
$employee2->age = 26;
$employee2->salary = 2000;

echo $employee1->salary + $employee2->salary . "\n";
echo $employee1->age + $employee2->age . "\n";