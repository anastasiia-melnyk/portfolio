<?php
/*
Завдання 42.1. Зробіть так, щоб клас Rectangle реалізовував два інтерфейси: і iFigure, і iTetragon.

Завдання 42.2. Створіть інтерфейс Circle (коло) з методами getRadius (отримати радіус) і getDiameter
(отримати діаметр).

Завдання 42.3. Зробіть так, щоб клас Disk також реалізовував два інтерфейси: і iFigure, і iCircle.
*/

interface Tetragon
{
	public function getA();
	public function getB();
	public function getC();
	public function getD();
}

interface Figure
{
	public function getSquare();
	public function getPerimeter();
}

class Quadrate implements Figure, Tetragon
{
	private $a;
	
	public function __construct($a)
	{
		$this->a = $a;
	}
	
	public function getA()
	{
		return $this->a;
	}
	
	public function getB()
	{
		return $this->a;
	}
		
	public function getC()
	{
		return $this->a;
	}
		
	public function getD()
	{
		return $this->a;
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

// Завдання 42.1.

class Rectangle implements Figure, Tetragon
{
	private $a;
	private $b;
	
	public function __construct($a, $b)
	{
		$this->a = $a;
		$this->b = $b;
	}
	
	public function getA()
	{
		return $this->a;
	}
	
	public function getB()
	{
		return $this->a;
	}
		
	public function getC()
	{
		return $this->a;
	}
		
	public function getD()
	{
		return $this->a;
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

// Завдання 42.2.

interface Circle
{
	public function __construct($a);
	public function getRadius();
	public function getDiameter();
}

class Disk implements Figure, Circle
{
	private $a;

	public function __construct($a)
	{
		$this->a = $a;
	}

	public function getSquare()
	{
		return 3.14 * pow($this->getRadius(), 2);
	}
		
	public function getPerimeter()
	{
		return 2 * 3.14 * $this->getRadius();
	}

	public function getRadius()
	{
		return $this->a / (2 * 3.14);
	}

	public function getDiameter()
	{
		return $this->a / 3.14;
	}
}

// Перевірка

$shapes = [
	new Quadrate(4),
	new Rectangle(3, 5),
	new Disk(6)
];

foreach ($shapes as $shape) {
    echo "Class: " . get_class($shape) . "\n";
    echo "Square: " . $shape->getSquare() . "\n";
    echo "Perimeter: " . $shape->getPerimeter() . "\n";

    if ($shape instanceof Disk) {
        echo "Radius: " . $shape->getRadius() . "\n";
        echo "Diameter: " . $shape->getDiameter() . "\n";
    }
    
    echo "-------------------\n";
}