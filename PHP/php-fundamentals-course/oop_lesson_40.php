<?php
/*
Завдання 40.1. Створіть інтерфейс iUser з методами getName, setName, getAge, setAge.

Завдання 40.2. Створіть інтерфейс iEmployee, що наслідує інтерфейс iUser і додає до нього методи
getSalary і setSalary.

Завдання 40.3. Створіть клас Employee, що реалізує інтерфейс iEmployee.
*/

interface iUser
{
	public function getName();
	public function setName($name);
	public function getAge();
	public function setAge($age);
}

interface iEmployee extends iUser
{
	public function getSalary();
	public function setSalary($salary);
}

class Employee implements iUser
{
	private $name;
	private $age;
	private $salary;

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

	public function getSalary()
	{
		return $this->salary;
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}
}

$employee = new Employee();

$employee->setName('Andriy');
echo $employee->getName() . "\n";

$employee->setAge(30);
echo $employee->getAge() . "\n";

$employee->setSalary(5000);
echo $employee->getSalary() . "\n";