<?php
/*
Завдання 33.20. Створіть клас ChildClass, що буде наслідувати ParentClass. Створіть об'єкт класу
ChildClass, запишіть його у змінну $obj.

Завдання 33.21. За допомогою функції is_a перевірте, чи належить об'єкт $obj класу ChildClass.

Завдання 33.22. За допомогою функції is_a перевірте, чи належить об'єкт $obj класу ParentClass.
*/

class ParentClass
{
	public $prop1;
}

class ChildClass extends ParentClass
{
	public $prop2;
}

$obj = new ChildClass();

echo is_a($obj, 'ChildClass') . "\n";
echo is_a($obj, 'ParentClass') . "\n";