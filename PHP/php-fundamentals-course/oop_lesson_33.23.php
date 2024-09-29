<?php
/*
Завдання 33.23. Виведіть на екран список усіх оголошених класів.
*/

class Class1
{
	public $prop1;
}

class Class2
{
		public $prop2;
}

class Class3
{
	public $prop3;
}

print_r(get_declared_classes());