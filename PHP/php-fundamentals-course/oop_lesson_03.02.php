<?php
/*
Завдання 3.2. Створити клас User з методом show, який буде приймати параметром строку і виводити її
після тексту «Hello».
*/

class User
{
	public $name;
	public $age;

	public function show($str)
	{
		return 'Hello' . ', ' . $str;
	}
}

$user = new User();
$user->name = 'Kostia';
$user->age = 25;

echo $user->show('World');