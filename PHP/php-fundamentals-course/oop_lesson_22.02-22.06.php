<?php
/*
Завдання 22.2. Створіть клас User, у якому будуть такі властивості тільки для читання: name (ім'я),
surname (прізвище). Початкові значення цих властивостей повинні встановлюватися в конструкторі. Зробіть
також геттери цих властивостей.

Завдання 22.3. Зробіть так, щоб третім параметром у конструктор передавалася дата народження працівника
у форматі рік-місяць-день Запишіть її у властивість birthday. Зробіть геттер для цієї властивості.

Завдання 22.4. Зробіть приватний метод calculateAge, який параметром прийматиме дату народження, а
повертатиме вік із врахуванням того, чи був уже день народження цього року, чи ні.

Завдання 22.5. Зробіть так, щоб метод calculateAge викликався в конструкторі об'єкта, розраховував вік
користувача і записував його в приватну властивість age. Зробіть геттер для цієї властивості.

Завдання 22.6. Створіть клас Employee, який буде наслідувати від класу User. Нехай новий клас має
властивість salary, у якій зберігатиметься зарплата працівника. Зарплата має передаватися четвертим
параметром у конструктор об'єкта. Зробіть також геттер для цієї властивості.
*/

class User
{
	private $name;
	private $surname;
	private $birthday;
	private $age;

	public function __construct($name, $surname, $birthday)
	{
		$this->name = $name;
		$this->surname = $surname;
		$this->birthday = date_create($birthday);
		$this->age = $this->calculateAge($birthday);
	}

	public function getName()
	{
		return $this->name;
	}

	public function getSurname()
	{
		return $this->surname;
	}

	public function getBirthday()
	{
		return date_format($this->birthday, 'Y-m-d');
	}

	public function getAge()
	{
		return $this->age;
	}

	private function calculateAge($birthday)
	{
		return date_diff(date_create($birthday), date_create('now'))->y;
	}
}

class Employee extends User
{
	private $salary;

	public function __construct($name, $surname, $birthday, $salary)
	{
		parent::__construct($name, $surname, $birthday);
		$this->salary = $salary;
	}

	public function getSalary()
	{
		return $this->salary;
	}
}

$employee = new Employee('Lina', 'Kostenko', '1930-03-19', 1000000);
echo $employee->getName().' '.$employee->getSurname().' '.$employee->getBirthday().' '.$employee->getAge().' '.$employee->getSalary();