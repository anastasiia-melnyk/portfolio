<?php
/*
Завдання 33.3. Створіть клас Test з методами method1, method2 і method3. За допомогою функції
get_class_methods отримайте масив назв методів класу Test.
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

var_dump(get_class_methods('Test'));