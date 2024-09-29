<?php
/*
Завдання 26.4. Скопіюйте код із прикладу уроку для класу Employee. Потім самостійно реалізуйте описаний
клас EmployeesCollection, перевірте його роботу.
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
		if (!$this->exists($newEmployee)) {
			$this->employees[] = $newEmployee;
		}
	}

	public function get()
	{
		return $this->employees;
	}

	private function exists($newEmployee)
	{
		foreach ($this->employees as $employee) {
			if ($employee == $newEmployee) {
				return true;
			} 
		}

		return false;
	}
}

$employeesCollection = new EmployeesCollection();

$employeesCollection->add(new Employee('Dmytro', 100));
$employeesCollection->add(new Employee('Dmytro', 100));
$employeesCollection->add(new Employee('Andriy', 200));

var_dump($employeesCollection->get());