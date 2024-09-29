<?php
/*
Завдання 31.2. Самостійно переробіть код класу User відповідно до теоретичної частини уроку: зробити
лічильник доступним тільки для читання - оголосити його приватним і зробити для нього статичний
метод-геттер getCount.

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
*/

class User
{
	private static $count = 0;
	public $name;

	public function __construct($name)
	{
		$this->name = $name;

		self::$count++;
	}

	public static function getCount()
	{
		return self::$count;
	}
}

$user1 = new User('user1');
echo User::getCount() . "\n";

$user2 = new User('user2');
echo User::getCount() . "\n";