<?php
/*
Завдання 19.2. Використовуючи приклад коду із уроку, створіть такий самий клас Student, що наслідує
клас User.
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
		$this->name = $name;
	}

	public function getAge()
	{
		return $this->age;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}
}

class Student extends User
{
	private $course;

	public function getCourse()
	{
		return $this->course;
	}

	public function setCourse($course)
	{
		$this->course = $course;
	}
}

// Перевірка

// Створюємо об'єкт класу Student
$student = new Student();

// Встановлюємо значення для властивостей
$student->setCourse(2);
$student->setName('Taras');
$student->setAge(21);

// Виводимо результат
echo $student->getCourse().' '.$student->getName().' '.$student->getAge();