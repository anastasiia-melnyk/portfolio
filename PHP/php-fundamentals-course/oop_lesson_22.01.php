<?php
/*
Завдання 22.1. Створіть такий самий клас Student як в прикладі уроку, що буде наслідувати від класу
User.
*/

class User
{
	protected $name;
	protected $age;

	public function __construct($name, $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}
}

class Student extends User
{
	private $course;

	public function __construct($name, $age, $course)
	{
		$this->name = $name;
		$this->age = $age;
		$this->course = $course;
	}

	public function getCourse()
	{
		return $this->course;
	}
}

// Створюємо об'єкт класу Student
$student = new Student('Olena', 22, 2);

// Виводимо дані
echo "Name: " . $student->getName() . "\n";
echo "Age: " . $student->getAge() . "\n";
echo "Course: " . $student->getCourse() . "\n";