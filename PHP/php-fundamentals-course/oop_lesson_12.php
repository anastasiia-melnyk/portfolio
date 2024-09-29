<?php
/*
Завдання 12.1. Створіть клас Student із двома властивостями: name (ім'я студента), course (курс
студента). Зробіть так, щоб ім'я студента було параметром при створенні об'єкта, а курс автоматично
приймав значення 1. Додайте геттери для властивостей. Нехай ім'я створеного студента буде незмінним і
доступним тільки для читання, а для курсу створіть метод, який переводитиме студента на наступний курс.

Завдання 12.2. Модифікуйте метод transferToNextCourse так, щоб під час переведення на новий курс
виконувалася перевірка того, що новий курс не буде більшим ніж 5.
*/

class Student
{
	private $name;
	private $course;

	public function __construct($name)
	{
		$this->name = $name;
		$this->course = 1;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getCourse()
	{
		return $this->course;
	}

	public function transferToNextCourse()
	{
		if ($this->course < 5) {
			$this->course++;
		}
	}
}

// Перевірка
// Створюємо об'єкт класу Student
$student = new Student("Alice");

// Виводимо початкові значення
echo "Name: " . $student->getName() . "\n";
echo "Initial Course: " . $student->getCourse() . "\n"; // Виведе: Initial Course: 1

// Переводимо студента на наступний курс
$student->transferToNextCourse();
echo "Course after transfer: " . $student->getCourse() . "\n"; // Виведе: Course after transfer: 2

// Переводимо студента до 5 курсу
for ($i = 0; $i < 3; $i++) { // 3 рази, щоб досягти максимуму 5
    $student->transferToNextCourse();
}

echo "Course after reaching the maximum: " . $student->getCourse() . "\n"; // Виведе: Course after reaching the maximum: 5

// Спробуємо перевести на наступний курс (не має бути зміни)
$student->transferToNextCourse();
echo "Course after attempting to transfer beyond maximum: " . $student->getCourse() . "\n"; // Виведе: Course after attempting to transfer beyond maximum: 5