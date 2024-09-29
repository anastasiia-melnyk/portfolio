<?php
/*
Завдання 45.1. Нехай є інтерфейс iTest1 і немає інтерфейсу iTest2.
Перевірте, що виведе функція interface_exists для інтерфейсу iTest1 і для інтерфейсу iTest2.

Завдання 45.2. Виведіть на екран список усіх оголошених інтерфейсів.
*/

interface iTest1
{

}

echo interface_exists('iTest1') . "\n";

var_dump(get_declared_interfaces());