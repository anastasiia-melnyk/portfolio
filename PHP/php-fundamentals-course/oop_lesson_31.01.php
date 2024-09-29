<?php
/*
Завдання 31.1. Реалізуйте самостійно такий самий клас User як в уроці, що буде підраховувати кількість
своїх об'єктів.
*/

class User
{
	public static $count = 0;
	public $name;

	public function __construct($name)
	{
		$this->name = $name;

		self::$count++;
	}
}

$user1 = new User('user1');
echo User::$count;

$user2 = new User('user2');
echo User::$count;