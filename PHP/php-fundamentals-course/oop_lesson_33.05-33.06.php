<?php
/*
Завдання 33.5. Створіть клас Test з публічними властивостями prop1 і prop2, а також із приватними
властивостями prop3 і prop4.

Завдання 33.6. Викличте функцію get_class_vars зовні класу Test. Виведіть масив доступних властивостей.
*/

class Test
{
	public $prop1 = 1;
	public $prop2 = 2;
	private $prop3 = 3;
	private $prop4 = 4;
}

$test = new Test();

$class_props = get_class_vars(get_class($test));

var_dump($class_props);