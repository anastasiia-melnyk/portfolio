<?php
/*
Завдання 36.1. Створіть клас Disk (коло), що реалізує інтерфейс Figure.
*/

interface Figure
{
	public function getSquare();
	public function getPerimeter();
}

class Disk implements Figure
{
	private $a;
	
	public function __construct($a)
	{
		$this->a = $a;
	}
	
	public function getSquare()
	{
		return 3.14 * pow($this->a, 2);
	}
	
	public function getPerimeter()
	{
		return 2 * (3.14 * $this->a);
	}
}

$disk = new Disk(5);

echo $disk->getSquare() . "\n";
echo $disk->getPerimeter() . "\n";