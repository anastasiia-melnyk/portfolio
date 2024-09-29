<?php
/*
Завдання 19.4. Створіть клас Driver (водій), який буде наслідувати від класу Employee. Нехай новий клас
додає такі властивості: водійський стаж, категорію водіння (A, B, C, D), а також геттери і сеттери до
них.
*/

class User
{
	private $name;
	private $age;

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
		return $this->age = $age;
	}
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
}

class Driver extends Employee
{
	private $drivingExperience;
	private $drivingCategory = ['A', 'B', 'C', 'D'];

	public function getDrivingExpirience()
	{
		return $this->drivingExperience;
	}

	public function setDrivingExpirience($drivingExperience)
	{
		$this->drivingExperience = $drivingExperience;
	}

	public function getDrivingCategory()
	{
		foreach ($this->drivingCategory as $drivingCategory) {
			return $this->drivingCategory;
		}
	}

	public function setDrivingCategory($drivingCategory = [])
	{
		$this->drivingCategory = $drivingCategory;
	}
}

// Створюємо об'єкт класу Driver
$driver = new Driver();

// Встановлюємо значення для властивостей
$driver->setName('Myhailo');
$driver->setAge(35);
$driver->setSalary(6000);
$driver->setDrivingExpirience(10);
$driver->setDrivingCategory(['B', 'C']);

// Отримуємо значення властивостей
$name = $driver->getName();
$age = $driver->getAge();
$salary = $driver->getSalary();
$drivingExperience = $driver->getDrivingExpirience();
$drivingCategories = $driver->getDrivingCategory();

// Виводимо результати
echo "Name: " . $name . "\n";
echo "Age: " . $age . "\n";
echo "Salary: " . $salary . "\n";
echo "Driving experience: " . $drivingExperience . " років\n";
echo "Categories of driver's license: " . implode(', ', $drivingCategories) . "\n";