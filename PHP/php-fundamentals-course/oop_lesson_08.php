<?php
/*
Завдання 8.1. Створіть клас Employee, у якого будуть такі приватні властивості: name (ім'я), age (вік), salary (зарплата).

Завдання 8.2. Створіть геттери і сеттери для всіх властивостей класу Employee.

Завдання 8.3. Доповніть клас Employee приватним методом isAgeCorrect, який буде перевіряти вік на коректність (від 1 до 100 років). Цей метод має використовуватися в сеттері setAge перед встановленням нового віку (якщо вік не коректний - він не повинен змінюватися).

Завдання 8.4. Нехай зарплата наших працівників зберігається в доларах. Зробіть так, щоб геттер getSalary додавав у кінець числа із зарплатою значок долара. Говорячи іншими словами, у властивості salary зарплата зберігатиметься просто числом, але геттер повертатиме її зі знаком долара на кінці.
*/

class Employee
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
		if ($this->isAgeCorrect($age)) {
			$this->age = $age;
		}
	}

	public function getSalary()
	{
		return $this->salary.'$';
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	private function isAgeCorrect($age)
	{
		return $age >= 1 and $age <= 100;
	}
}

// Перевірка

// Створюємо об'єкт класу Employee
$employee = new Employee();

// Встановлюємо значення
$employee->setName("Kateryna");
$employee->setAge(30);
$employee->setSalary(50000);

// Виводимо результати
echo "Name: " . $employee->getName() . "\n";
echo "Age: " . $employee->getAge() . "\n";
echo "Salary: " . $employee->getSalary() . "\n";

// Встановлення віку від 1 до 100 років
$employee->setAge(25);
echo "Age from 1 to 100 years: " . $employee->getAge() . "\n";

// Встановлення некоректного віку - менше 100 років
$employee->setAge(-5);
echo "Age under 100 years old: " . $employee->getAge() . "\n"; // вік не змінюється

// Встановлення некоректного віку - більше 100 років
$employee->setAge(150);
echo "Age over 100 years old: " . $employee->getAge() . "\n"; // вік не змінюється
