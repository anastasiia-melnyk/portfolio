<?php
/*
Завдання 39.3. Створіть інтерфейс iUser, який буде описувати користувача. Передбачається, що користувач
матиме ім'я та вік, і ці поля передаватимуться параметрами конструктора.
Нехай інтерфейс також задає те, що в користувача будуть геттери (але не сеттери) для імені та віку.

Завдання 39.4. Створіть клас User, що реалізує інтерфейс iUser.
*/

interface iUser
{
	public function __construct($name, $age);
	public function getName();
	public function getAge();
}

class User implements iUser
{
	private $name;
	private $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}
}

$user = new User('Dmytro', 25);

echo $user->getName() . "\n";
echo $user->getAge() . "\n";