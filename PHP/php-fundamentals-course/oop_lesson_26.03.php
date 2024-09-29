<?php
/*
Завдання 26.3.
Створіть функцію compare, яка параметром прийматиме два об'єкти і порівнюватиме їх.
Функція повинна повертати 1, якщо передані змінні посилаються на один і той самий об'єкт.
Функція має повертати 0, якщо об'єкти різні, але одного й того самого класу і з тими самими властивостями
та їхніми значеннями.
Функція повинна повертати -1 в іншому випадку.
*/

function compare($user1, $user2) {
	if ($user1 === $user2) {
		return 1;
	}
	if ($user1 == $user2) {
		return 0;
	} else {
		return -1;
	}
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

$user1 = new User('Dmytro', 30);
$user2 = new User('Dmytro', 30);
$user3 = $user1;
$user4 = new User('Dmytro', 32);

echo compare($user1, $user2) . "\n";
echo compare($user1, $user3) . "\n";
echo compare($user1, $user4) . "\n";