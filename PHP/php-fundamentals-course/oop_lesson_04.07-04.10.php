<?php
/*
Завдання 4.7. Створіть клас User, у якого будуть такі властивості: name (ім'я), age (вік).

Завдання 4.8. Створіть метод setAge, який параметром буде приймати новий вік користувача.

Завдання 4.9. Створіть об'єкт класу User з ім'ям 'Микола' і віком 25. За допомогою методу setAge
змініть вік на 30. Виведіть нове значення віку на екран.

Завдання 4.10. Модифікуйте метод setAge так, щоб він спочатку перевіряв, що переданий вік більше або
дорівнює 18. Якщо це так - нехай метод змінює вік користувача, а якщо не так - то нічого не робить.
*/

class User
{
	public $name;
	public $age;

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function setAgeModified($age)
	{
		if ($age >= 18) {
			$this->age = $age;
		}
	}
}

$user = new User();
$user->name = 'Daryna';
$user->age = 25;

$user->setAge(30);
echo $user->age . "\n";

$user->setAgeModified(35);
echo $user->age . "\n";