<?php
/*
Завдання 21.1. Модифікуйте код класу User із уроку так, щоб у методі setName виконувалася перевірка
того, що довжина імені більше 3-х символів.

Завдання 21.2. Додайте в клас Student метод setName, у якому буде виконуватися перевірка того, що
довжина імені більше 3-х символів і менше 10 символів. Нехай метод setName класу Student використовує
метод setName свого батьківського класу, щоб виконати частину перевірки.
*/

class User
{
	private $name;
	private $age;

	public function getName()
	{
		return $this->name;
	}

	public function setName($name)
	{
		if (strlen($name) > 3) {
			$this->name = $name;
		}
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		if ($age >= 18) {
			$this->age = $age;
		}
	}
}

class Student extends User
{
	private $course;

	public function setName($name)
	{
		if (strlen($name) < 10) {
			parent::setName($name);
		}
	}

	public function setAge($age)
	{
		if ($age <= 25) {
			parent::setAge($age);
		}
	}

	public function getCourse()
	{
		return $this->course;
	}

	public function setCourse($course)
	{
		$this->course = $course;
	}
}

// Створюємо об'єкт класу Student
$student = new Student();

// Встановити ім'я довжиною більше 3-х символів
$student->setName('Aria');
echo "Name with 4 letters: " . $student->getName() . "\n";

// Встановити ім'я довжиною менше 10 символів
$student->setName('Olexander');
echo "Name with 9 letters: " . $student->getName() . "\n";

// Встановити довжину імені менше 4-х символів 
$student->setName('Noa');
echo "Name less than 4 characters long: " . $student->getName() . "\n"; // ім'я не змінюється

// Встановити довжину імені більше 9 символів
$student->setName('Anastasiia');
echo "Name longer than 9 characters: " . $student->getName() . "\n"; // ім'я не змінюється

// Встановити вік менше 18 років
$student->setAge(17);
echo "Age under 18 years old: " . $student->getAge() . "\n"; // вік не змінюється

// Встановити вік більше 25 років
$student->setAge(26);
echo "Age over 25 years old: " . $student->getAge() . "\n"; // вік не змінюється

// Встановити вік більше 18 і менше 25 років
$student->setAge(23);
echo "Age over 18 and under 25: " . $student->getAge() . "\n";

// Встановити курс і вивести його на екран
$student->setCourse(3);
echo "Course: " . $student->getCourse() . "\n";