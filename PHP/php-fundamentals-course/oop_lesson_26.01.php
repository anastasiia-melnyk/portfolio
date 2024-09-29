<?php
/*
Завдання 26.1. Створіть функцію compare, яка параметром прийматиме два об'єкти і повертатиме true, якщо
вони мають однакові властивості та значення, що є екземплярами одного й того самого класу, і false,
якщо це не так.
*/

function compare($user1, $user2) {
    return $user1 == $user2;
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

echo compare(new User('Olena', 30),new User('Olena', 30));