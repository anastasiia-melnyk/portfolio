<?php
/*
Завдання 33.8. Створіть клас Test з публічними властивостями prop1 і prop2, а також із приватними
властивостями prop3 і prop4. Створіть об'єкт цього класу. За допомогою функції get_object_vars
отримайте масив властивостей створеного об'єкта.
*/

class Test
{
	public $prop1 = 1;
	public $prop2 = 2;
	private $prop3 = 3;
	private $prop4 = 4;

	public function testFunc()
	{
        var_dump(get_object_vars($this));
    }
}

$test = new Test();
var_dump(get_object_vars($test));

$test->testFunc();