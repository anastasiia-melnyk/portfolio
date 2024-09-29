<?php
/*
Завдання 14.3. Дано клас User:
	class User
	{
		public $surname;
		public $name;
		public $patronymic;

		public function __construct($surname, $name, $patronymic)
		{
			$this->surname = $surname;
			$this->name = $name;
			$this->patronymic = $patronymic;
		}
	}.
Виведіть на екран прізвище, ім'я та по батькові користувача.
*/

class User
{
	public $surname;
	public $name;
	public $patronymic;

	public function __construct($surname, $name, $patronymic)
	{
		$this->surname = $surname;
		$this->name = $name;
		$this->patronymic = $patronymic;
	}
}

// Перевірка

// Створюємо об'єкт класу User
$user = new User('Kosach', 'Larysa', 'Petrivna');

// Виводимо значення
$props = ['surname', 'name', 'patronymic'];
echo $user->{$props[0]} . "\n";
echo $user->{$props[1]} . "\n";
echo $user->{$props[2]} . "\n";