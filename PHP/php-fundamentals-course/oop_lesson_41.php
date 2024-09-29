<?php
/*
Завдання 41.1. Створіть інтерфейс Figure3d (тривимірна фігура), який матиме метод getVolume (отримати
об'єм) і метод getSurfaceSquare (отримати площу поверхні).

Завдання 41.2. Створіть клас Cube (куб), який буде реалізовувати інтерфейс Figure3d.

Завдання 41.3. Створіть кілька об'єктів класу Quadrate, кілька об'єктів класу Rectangle і кілька
об'єктів класу Cube. Запишіть їх у масив $arr у випадковому порядку.

Завдання 41.4. Переберіть циклом масив $arr і виведіть на екран тільки площі об'єктів, що реалізують
інтерфейс Figure.

Завдання 41.5. Переберіть циклом масив $arr і виведіть для плоских фігур їхні площі, а для об'ємних -
площі їхньої поверхні.
*/

interface Figure
{
	public function getSquare();
	public function getPerimeter();
}

class Quadrate implements Figure
{
	private $a;
	
	public function __construct($a)
	{
		$this->a = $a;
	}
	
	public function getSquare()
	{
		return $this->a * $this->a;
	}
	
	public function getPerimeter()
	{
		return 4 * $this->a;
	}
}

class Rectangle implements Figure
{
	private $a;
	private $b;
		
	public function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}
	
	public function getSquare()
	{
		return $this->a * $this->b;
	}
		
	public function getPerimeter()
	{
		return 2 * ($this->a + $this->b);
	}
}

interface Figure3d
{
	public function __construct($a);
	public function getVolume();
	public function getSurfaceSquare();
}

// Завдання 41.2.

class Cube implements Figure3d
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

	public function getSurfaceSquare()
	{
		return 6 * pow($this->a, 2);
	}
}

// Завдання 41.3.

$figures = [
	new Quadrate(3),
	new Rectangle(3, 3),
	new Quadrate(4),
	new Cube(5),
	new Rectangle(2, 2),
	new Cube(6)
];

// Завдання 41.4.

foreach ($figures as $figure) {
	
	if ($figure instanceof Figure) {
		
		echo $figure->getSquare()."\n";
	}
}

// Завдання 41.5.

foreach ($figures as $figure) {
	
	if ($figure instanceof Figure) {

		echo $figure->getSquare()."\n";
	}

	if ($figure instanceof Figure3d) {
		
		echo $figure->getVolume()."\n";
	}
}