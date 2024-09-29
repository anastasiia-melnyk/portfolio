<?php
/*
Завдання 20.1. Скопіюйте код класу User із уроку. Самостійно реалізуйте описаний клас Student з
методами getCourse, setCourse і addOneYear.
*/

class User
{
	private $name;
	protected $age;
		
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
	
	public function addOneYear()
	{
		$this->age++;
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

// Встановлюємо значення для властивостей
$student->setName('Helga');
$student->setAge(20);
$student->setCourse(3);

// Отримуємо значення до додавання одного року
echo "Name: " . $student->getName() . "\n";
echo "Age: " . $student->getAge() . "\n";
echo "Course: " . $student->getCourse() . "\n";

// Додаємо один рік до віку студента
$student->addOneYear();

// Отримуємо значення після додавання одного року
echo "New age: " . $student->getAge() . "\n";