<?php
/*
Завдання 6.1. Внесіть зміни в клас User, створений в попередньому уроці. Зробіть метод isAgeCorrect
приватним і перенесіть його в самий низ класу.

Завдання 6.2. Спробуйте викликати метод isAgeCorrect ззовні класу. Переконайтеся, що це буде викликати
помилку.
*/

class User
{
	public $name;
	public $age;

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

	private function isAgeCorrect($age)
	{
		return $age >= 18 and $age <= 60;
	}

}

$user = new User();

$user->isAgeCorrect(25);