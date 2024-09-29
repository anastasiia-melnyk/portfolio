<?php
/*
Завдання 26.2. Створіть функцію compare, яка параметром прийматиме два об'єкти і повертатиме true, якщо
передані змінні посилаються на один і той самий об'єкт, і false, якщо на різні.
*/

function compare($user1, $user2) {
	return $user1 === $user2;
}

class User
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

$user1 = new User('Andriy', 30);
$user2 = $user1;


var_export (compare($user1, $user2));