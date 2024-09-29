<?php
/*
Завдання 33.13. Створіть клас Test із властивістю prop1 і без властивості prop2. Перевірте, що виведе
функція property_exists для властивості prop1 і для властивості prop2.
*/

class Test
{
	public $prop1;
}

var_dump(property_exists('Test', 'prop1'));