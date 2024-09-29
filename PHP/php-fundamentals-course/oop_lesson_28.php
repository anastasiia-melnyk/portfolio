<?php
/*
Завдання 28.1. Створіть клас Post (посада), у якому будуть такі властивості, доступні тільки для
читання: name (назва посади) і salary (зарплата на цій посаді).

Завдання 28.2. Створіть кілька об'єктів класу Post: програміст, менеджер, водій.

Завдання 28.3. Створіть клас Employee (працівник), у якому будуть такі властивості: name (ім'я) і
surname (прізвище). Нехай початкові значення цих властивостей будуть передаватися параметром у
конструктор.

Завдання 28.4. Зробіть геттери та сеттери для властивостей name і surname.

Завдання 28.5. Нехай тепер третім параметром конструктора буде передаватися посада працівника, що являє
собою об'єкт класу Post. Укажіть тип цього параметра в явному вигляді.

Завдання 28.6. Зробіть так, щоб посада працівника (тобто переданий об'єкт із посадою) записувалася у
властивість post.

Завдання 28.7. Створіть об'єкт класу Employee з посадою програміст. При його створенні використовуйте
один з об'єктів класу Post, створений нами раніше.

Завдання 28.8 Виведіть на екран ім'я, прізвище, посаду та зарплату створеного працівника.

Завдання 28.9. Реалізуйте в класі Employee метод changePost, який змінюватиме посаду працівника на
іншу. Метод повинен приймати параметром об'єкт класу Post. Укажіть у методі тип параметра, що
приймається, у явному вигляді.
*/

class Post
{
	private $name;
	private $salary;

	public function __toString()
    {
	    return $this->name . '(' . $this->salary . ')';
    }

	public function __construct($name, $salary)
	{
		$this->name = $name;
		$this->salary = $salary;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

class Employee
{
	private $name;
	private $surname;
	private $post;

	public function __construct($name, $surname, Post $post)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->post = $post;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function getPost()
	{
		return $this->post->getName();
	}

	public function changePost(Post $post)
	{
		$this->post = $post;
	}
}

$post1 = new Post('Developer', 3000);
$post2 = new Post('Manager', 2000);
$post3 = new Post('Driver', 1000);

$employee = new Employee('Andriy', 'Dmytrenko', $post1);
echo $employee->getName().' '.$employee->getSurname().' '.$employee->getPost().' '.$post1->getSalary();
echo "\n";

$employee->changePost($post2);
echo 'New Post'.' - '.$employee->getPost()."\n";