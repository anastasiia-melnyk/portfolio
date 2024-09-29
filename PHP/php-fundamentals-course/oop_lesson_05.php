<?php
/*
Завдання 5.1. Створіть клас User, додайте метод setAge, який буде змінювати вік користувача. Створіть
метод addAge, який буде додавати деяку кількість років до поточного віку. Створіть допоміжний метод
isAgeCorrect, який буде перевіряти введений вік: якщо вік від 18 до 60, тоді змінити вік на новий, а
якщо ні, вік не змінюється. Метод isAgeCorrect буде приймати параметром вік для перевірки. Додайте в
методи setAge та addAge перевірку віку.

Завдання 5.2. Створіть об'єкт класу User, перевірте роботу методів setAge і addAge.

Завдання 5.3. Додайте метод subAge, який виконуватиме зменшення поточного віку на передану кількість
років.
*/

class User
{
	public $name;
	public $age;

	public function isAgeCorrect($age)
	{
		return $age >=18 && $age <= 60;
	}

	public function setAge($age)
	{
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}

	public function addAge($years)
	{
		$newAge = $this->age + $years;
		if ($this->isAgeCorrect($newAge)) {
			$this->age = $newAge;
		}
	}

	public function subAge($years)
	{
		$this->age = $this->age - $years;
	}
}

$user = new User();

$user->age = 25;
$user->setAge(30);
$user->addAge(20);
$user->subAge(10);

echo $user->age;