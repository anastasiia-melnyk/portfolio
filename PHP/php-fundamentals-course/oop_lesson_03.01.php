<?php
/*
Завдання 3.1. Створити клас User з методом show, який виводитиме текст «Hello».
*/

class User
{
	public $name;
	public $age;

	public function show()
	{
		return 'Hello';
	}
}

$user = new User();
$user->name = 'Oksana';
$user->age = 25;

echo $user->show();