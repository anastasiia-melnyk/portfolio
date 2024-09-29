<?php
/*
Завдання 32.1. Створіть клас Circle, за допомогою якого можна буде знайти площу круга і довжину
окружності.

Завдання 32.2. За допомогою описаного класу Circle знайдіть довжину окружності та площу круга з
радіусом 10.
*/

class Circle
{
	const PI = 3.14;
	private $radius;

	public function __construct($radius)
	{
		$this->radius = $radius;
	}

	public function getSquare()
	{
		return self::PI * pow($this->radius, 2);
	}

	public function getCircuit()
	{
		return 2 * self::PI * $this->radius;
	}
}

$circle = new Circle(10);

echo 'Area of a circle'.' - '.$circle->getSquare() . "\n";
echo 'Circumference'.' - '.$circle->getCircuit() . "\n";