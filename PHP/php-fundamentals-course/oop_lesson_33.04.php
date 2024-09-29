<?php
/*
Завдання 33.4. Створіть об'єкт класу Test, запишіть його у змінну $test.
За допомогою функції get_class_methods отримайте масив назв методів об'єкта. Переберіть його циклом і в
циклі викличте кожен метод класу, використовуючи об'єкт $test.
Переберіть цей масив циклом і в цьому циклі викличте кожен метод об'єкта.
*/

class Test
{
	public function method1()
	{
		return (true);
	}

	public function method2()
	{
		return(true);
	}

	public function method3()
	{
		return(true);
	}
}

$test = new Test();
$classMethods = get_class_methods($test);
// var_dump($classMethods);

foreach ($classMethods as $method) {
	echo $method."\n";
}