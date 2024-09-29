<?php
/*
Завдання 15.1. Нехай масив $methods буде асоціативним із ключами method1 і method2:
$methods = ['method1' => 'getName', 'method2' => 'getAge'];

Виведіть ім'я та вік користувача за допомогою цього масиву.
*/

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

$user = new User('Andriy', 21);

$methods = ['method1' => 'getName', 'method2' => 'getAge'];

echo $user->{$methods['method1']}().' '.$user->{$methods['method2']}();