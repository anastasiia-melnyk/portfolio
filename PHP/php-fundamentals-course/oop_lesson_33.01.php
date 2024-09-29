<?php
/*
Завдання 33.1. Зробіть об'єкт якого-небудь класу. Застосуйте до об'єкта функцію get_class і дізнайтеся
ім'я класу, якому належить об'єкт.
*/

class Test
{
	public function className()
	{
		get_class($this);
	}
}

$test = new Test();

echo get_class($test);