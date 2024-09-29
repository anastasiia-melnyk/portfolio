<?php
/*
Завдання 35.1. Реалізуйте такий самий абстрактний клас User як в уроці, а також класи Employee і
Student, що наслідують від нього.

Завдання 35.2. Додайте у клас User такий самий абстрактний метод increaseRevenue. Напишіть реалізацію
цього методу в класах Employee і Student.

Завдання 35.3. Додайте також у клас User абстрактний метод decreaseRevenue (зменшити зарплату).
Напишіть реалізацію цього методу в класах Employee і Student.
*/

abstract class User
{
	private $name;
	
	public function getName()
	{
		return $this->name;
	}
	
	public function setName($name)
	{
		$this->name = $name;
	}

	abstract public function increaseRevenue($value);

	abstract public function decreaseRevenue($value);
}


class Employee extends User
{
	private $salary;
	
	public function getSalary()
	{
		return $this->salary;
	}
	
	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	public function increaseRevenue($value)
	{
		$this->salary = $this->salary + $value;
	}

	public function decreaseRevenue($value)
	{
		$this->salary = $this->salary - $value;
	}
}


class Student extends User
{
	private $scholarship;
	
	public function getScholarship()
	{
		return $this->scholarship;
	}
	
	public function setScholarship($scholarship)
	{
		$this->scholarship = $scholarship;
	}

	public function increaseRevenue($value)
	{
		$this->scholarship = $this->scholarship + $value;
	}

	public function decreaseRevenue($value)
	{
		$this->scholarship = $this->scholarship - $value;
	}
}


$employee = new Employee();
$employee->setName('Andriy');
$employee->setSalary(1000);
$employee->increaseRevenue(100);
$employee->decreaseRevenue(300);

echo $employee->getSalary();