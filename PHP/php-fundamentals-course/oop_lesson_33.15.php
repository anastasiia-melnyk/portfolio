<?php
/*
Завдання 33.15. Створіть клас ChildClass, що буде наслідувати ParentClass. За допомогою функції
get_parent_class виведіть на екран батьківський клас ParentClass.
*/

class ParentClass
{

}

class ChildClass extends ParentClass
{

}

echo get_parent_class('ChildClass');