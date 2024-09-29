<?php
/*
Завдання 6.3. Створіть клас Student із властивостями $name і $course (курс студента, від 1-го до 5-го).

Завдання 6.4. У класі Student створіть public метод transferToNextCourse, який буде переводити студента
на наступний курс.

Завдання 6.5. Додайте в методі transferToNextCourse перевірку на те, що наступний курс має бути не
більший ніж 5.

Завдання 6.6. Винесіть перевірку курсу в окремий private метод isCourseCorrect.
*/

class Student
{
	public $name;
	public $course;

	public function transferToNextCourse()
	{
		if ($this->isCourseCorrect()) {
			$this->course += 1; // $this->course = $this->course + 1;
		}
	}

	private function isCourseCorrect()
	{
		return $this->course > 0 and $this->course < 5;
	}
}

$student = new Student();
$student->course = 2;
$student->transferToNextCourse();

echo $student->course;

