<?php
/*
Завдання 33.11. Створіть клас Test з методом method1 і без методу method2. Перевірте, що виведе функція
method_exists для методу method1 і для методу method2.
*/

class Test
{
	public function method1()
	{
		return(true);
	}
}

$test = new Test();

var_dump(method_exists($test, 'method1')) . "\n";
var_dump(method_exists($test, 'method2')) . "\n";