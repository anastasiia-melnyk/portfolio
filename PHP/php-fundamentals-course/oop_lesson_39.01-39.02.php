
<?php
/*
Завдання 39.1. Створіть інтерфейс iCube, який буде описувати фігуру Куб. Нехай інтерфейс описує
конструктор, що параметром приймає ребро куба, а також методи для отримання об'єму куба і площі
поверхні.

Завдання 39.2. Створіть клас Cube, що реалізує інтерфейс iCube.
*/

interface iCube
{
	public function __construct($a);
	public function getVolume();
	public function getSquare();
}

class Cube implements iCube
{
	private $a;

	public function __construct($a)
	{
		$this->a = $a;
	}

	public function getVolume()
	{
		return pow($this->a, 3);
	}

	public function getSquare()
	{
		return 6 * pow($this->a, 2);
	}
}

$cube = new Cube(3);

echo 'Cube volume'.' = '.$cube->getVolume() . "\n";
echo 'Surface area'.' = '.$cube->getSquare() . "\n";