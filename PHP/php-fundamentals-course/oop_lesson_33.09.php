<?php
/*
Завдання 33.9. Нехай є клас Test1 і немає класу Test2. Перевірте, що виведе функція class_exists для
класу Test1 і для класу Test2.
*/

class Test1
{
	public $prop;
}

echo class_exists('Test1');
echo class_exists('Test2');