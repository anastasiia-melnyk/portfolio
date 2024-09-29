<?php
/*
Завдання 10.2. Підключіть до файлу index.php клас Employee. Створіть два об'єкти цього класу з
довільними даними. Виведіть на екран суму їхніх зарплат.
*/

require_once 'oop_lesson_10_Employee.php';

$employee1 = new Employee;

$employee1->name = 'Dmytro';
$employee1->surname = 'Kozachenko';
$employee1->patronymic = 'Kostiantynovych';
$employee1->salary = 1000;

$employee2 = new Employee;

$employee2->name = 'Taras';
$employee2->surname = 'Shevchenko';
$employee2->patronymic = 'Grygorovych';
$employee2->salary = 2000;

echo $employee1->salary + $employee2->salary;