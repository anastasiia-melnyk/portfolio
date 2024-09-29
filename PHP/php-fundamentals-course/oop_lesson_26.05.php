<?php
/*
Завдання 26.5. Спростіть клас EmployeesCollection з попереднього уроку із використанням функції in_array. Перевірте його роботу.
*/

class Employee
{
	private $name;
	private $salary;

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

class EmployeesCollection
{
	private $employees = [];

	public function add($newEmployee)
	{
		if (!in_array($newEmployee, $this->employees, false)) {
			$this->employees[] = $newEmployee;
		}
	}

	public function get()
	{
		return $this->employees;
	}
}

$employeesCollection = new EmployeesCollection();

$employeesCollection->add(new Employee('Olesia', 100));
$employeesCollection->add(new Employee('Olesia', 100));

var_dump($employeesCollection->get());