<?php
/*
Завдання 33.16. Створіть клас ChildClass, який наслідує ParentClass, який, своєю чергою, наслідує
GrandParentClass.

Завдання 33.17. За допомогою функції is_subclass_of перевірте, чи є клас ChildClass нащадком
GrandParentClass.

Завдання 33.18. За допомогою функції is_subclass_of перевірте, чи є клас ParentClass нащадком
GrandParentClass.

Завдання 33.19. За допомогою функції is_subclass_of перевірте, чи є клас ChildClass нащадком
ParentClass.
*/

class GrandParentClass
{
	public $prop1;
}

class ParentClass extends GrandParentClass
{
	public $prop2;
}

class ChildClass extends ParentClass
{
	public $prop3;
}

echo is_subclass_of('ChildClass', 'GrandParentClass') . "\n";
echo is_subclass_of('ParentClass', 'GrandParentClass') . "\n";
echo is_subclass_of('ChildClass', 'ParentClass') . "\n";