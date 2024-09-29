<?php
/*
Завдання 27.7. Створіть клас User з публічними властивостями name (ім'я) і surname (прізвище).

Завдання 27.8. Створіть клас Employee, який буде наслідувати від класу User і додавати salary 
зарплата).

Завдання 27.9. Створіть клас City з публічними властивостями name (назва міста) і population (кількість
населення).

Завдання 27.10. Створіть 3 об'єкти класу User, 3 об'єкти класу Employee, 3 об'єкти класу City, і в
довільному порядку запишіть їх у масив $arr.

Завдання 27.11. Переберіть циклом масив $arr і виведіть на екран стовпчик властивостей name тих
об'єктів, які належать класу User або нащадку цього класу.

Завдання 27.12. Переберіть циклом масив $arr і виведіть на екран стовпчик властивостей name тих
об'єктів, які НЕ належать класу User або нащадку цього класу.

Завдання 27.13. Переберіть циклом масив $arr і виведіть на екран стовпчик властивостей name тих
об'єктів, що належать саме класу User, тобто не класу City і не класу Employee.
*/

class User
{
	public $name;
	public $surname;

	public function __construct($name, $surname)
	{
		$this->name = $name;
		$this->surname = $surname;
	}
}

class Employee extends User
{
	public $salary;

	public function __construct($name, $surname, $salary)
	{
		parent::__construct($name, $surname);
		$this->salary = $salary;
	}
}

class City
{
	public $name;
	public $population;

	public function __construct($name, $population)
	{
		$this->name = $name;
		$this->population = $population;
	}
}

$user1 = new User('Kostia', 'Kostenko');
$user2 = new User('Andriy', 'Andrienko');
$user3 = new User('Dmytro', 'Dmytrenko');

$employee1 = new Employee('Stefania', 'Stefanienko', 5000);
$employee2 = new Employee('Olena', 'Oleinichenko', 3000);
$employee3 = new Employee('Natalka', 'Natalnichenko', 4000);

$city1 = new City('Kyiv', 3000000);
$city2 = new City('Odesa', 2000000);
$city3 = new City('Lviv', 1000000);

$arr = [$employee2, $user1, $city3, $employee1, $user2, $city2, $employee3, $user3, $city1];

// Завдання 27.11.

foreach ($arr as $user) {
	if ($user instanceof User) {
		echo $user->name."\n";
	}
}
echo "\n";

// Завдання 27.12.

foreach ($arr as $user) {
	if (!$user instanceof User) {
		echo $user->name."\n";
	}
}
echo "\n";

// Завдання 27.13.

foreach ($arr as $user) {
	if ($user instanceof User and !$user instanceof Employee) {
		echo $user->name."\n";
	}
}