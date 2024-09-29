<?php
/*
Завдання 38.1.

Нехай дано такий інтерфейс iUser:

<?php
	interface iUser
	{
		public function setName($name); // встановити ім'я
		public function getName(); // отримати ім'я
		public function setAge($age); // встановити вік
		public function getAge(); // отримати вік
	}
?>
Створіть клас User, який буде реалізовувати цей інтерфейс.
*/

interface iUser
{
	public function setName($name);
	public function getName();
	public function setAge($age);
	public function getAge();
}

class User implements iUser
{
	private $name;
    private $age;
    
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getAge()
	{
		return $this->age;
	}
}

$user = new User();

$user->setName('Test');
echo $user->getName() . "\n";

$user->setAge(25);
echo $user->getAge() . "\n";