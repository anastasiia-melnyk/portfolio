<?php
/*
Завдання 17.3. Створіть клас User, у якого будуть приватні властивості surname (прізвище), name (ім'я),
patronymic (по батькові). Ці властивості мають задаватися за допомогою відповідних сеттерів.


Завдання 17.4. Зробіть так, щоб ці сеттери викликалися ланцюжком у будь-якому порядку, а найостаннішим
методом у ланцюжку можна було викликати метод getFullName, який поверне ПІБ користувача (першу букву прізвища, імені та по батькові).

Приклад:

echo (new User)->setName('Іван')->setPatronymic('Якович')->setSurname('Франко')->getFullName();
*/

class User
{
	private $surname;
	private $name;
	private $patronymic;

	public function getSurname()
	{
		return $this->surname;
	}

	public function setSurname($surname)
	{
		$this->surname = $surname;
		return $this;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		$this->name = $name;
		return $this;
	}

	public function getPatronymic()
	{
		return $this->patronymic;
	}

	public function setPatronymic($patronymic)
	{
		$this->patronymic = $patronymic;
		return $this;
	}

	public function getFullName()
	{
		return mb_substr($this->getSurname(), 0, 1).' '.mb_substr($this->getName(), 0, 1).' '.mb_substr($this->getPatronymic(), 0, 1);
	}
}

echo (new User)->setName('Ivan')->setPatronymic('Yakovych')->setSurname('Franko')->getFullName();