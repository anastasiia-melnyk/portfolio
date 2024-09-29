<?php
/*
Завдання 33.7. Викличте функцію get_class_vars усередині класу Test (наприклад, у конструкторі).
Виведіть масив доступних властивостей.
*/

class Test
{
	public $prop1 = 1;
	public $prop2 = 2;
	private $prop3 = 3;
	private $prop4 = 4;

	public static function getProps()
    {
        return get_class_vars(__CLASS__);
    }
}

Test::getProps();
var_dump(get_class_vars('Test'));