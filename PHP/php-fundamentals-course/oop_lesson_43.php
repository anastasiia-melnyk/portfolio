<?php
/*
Завдання 43.1. Скопіюйте код класу Employee і код інтерфейсу iProgrammer із уроку. Реалізуйте клас
iProgrammer самостійно.
*/

interface iProgrammer
{
	public function __construct($name, $salary);
	public function getName();
	public function getSalary();
	public function getLangs();
	public function addLang($lang);
}

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

class Programmer extends Employee implements iProgrammer
{
	private $langs = [];

	public function addLang($lang)
	{
		$this->langs[] = $lang;
	}
		
	public function getLangs()
	{
		return implode(' ', $this->langs);
	}
}

$programmer = new Programmer("Andriy", 60000);
$programmer->addLang("PHP");
$programmer->addLang("JavaScript");

echo "Name: " . $programmer->getName() . "\n";
echo "Salary: " . $programmer->getSalary() . "\n";
echo "Languages: " . $programmer->getLangs() . "\n";