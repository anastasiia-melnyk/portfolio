<?php
/*
Завдання 27.1. Створіть клас Employee з публічними властивостями name (ім'я) і salary (зарплата).

Завдання 27.2. Створіть клас Student з публічними властивостями name (ім'я) і scholarship (стипендія).

Завдання 27.3. Створіть по 3 об'єкти кожного класу і в довільному порядку запишіть їх у масив $arr.

Завдання 27.4. Переберіть циклом масив $arr і виведіть на екран імена всіх працівників у стовпчик.

Завдання 27.5. Аналогічним чином виведіть на екран імена усіх студентів у стовпчик.

Завдання 27.6. Переберіть циклом масив $arr і за його допомогою знайдіть суму зарплат працівників і
суму стипендій студентів. Після циклу виведіть ці два числа на екран.
*/

class Employee
{
	public $name;
	public $salary;

	public function __construct($name, $salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}
}

class Student
{
	public $name;
	public $scholarship;

	public function __construct($name, $scholarship)
	{
		$this->name = $name;
		$this->scholarship = $scholarship;
	}
}

$employee1 = new Employee('Kostia', 10000);
$employee2 = new Employee('Andriy', 9000);
$employee3 = new Employee('Dmytro', 8000);

$student1 = new Student('Stefania', 2000);
$student2 = new Student('Olena', 3000);
$student3 = new Student('Natalka', 4000);

$arr = [$employee3, $student2, $employee1, $student3, $employee2, $student1];

foreach ($arr as $employee) {
	if ($employee instanceof Employee) {
		echo $employee->name."\n";
	}
}

foreach ($arr as $student) {
	if ($student instanceof Student) {
		echo $student->name."\n";
	}
}

$sumSalary = 0;
$sumScholarship = 0;

foreach ($arr as $item) {
    if ($item instanceof Employee) {
        $sumSalary += $item->salary;
    } elseif ($item instanceof Student) {
        $sumScholarship += $item->scholarship;
    }
}

echo $sumSalary.' '.$sumScholarship;