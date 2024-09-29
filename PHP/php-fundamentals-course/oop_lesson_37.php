<?php
/*
Завдання 37.1. Реалізуйте такий самий клас FiguresCollection.

Завдання 37.2. Додайте в клас FiguresCollection метод getTotalPerimeter для знаходження сумарного
периметра всіх фігур.
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

class FiguresCollection
{
	private $figures = [];
		
	public function addFigure(Figure $figure)
	{
		$this->figures[] = $figure;
	}
	
	public function getTotalSquare()
	{
		$sum = 0;
			
		foreach ($this->figures as $figure) {
			$sum += $figure->getSquare();
		}
		
		return $sum;
	}

	public function getTotalPerimeter()
	{
		$sum = 0;
			
		foreach ($this->figures as $figure) {
			$sum += $figure->getPerimeter();
		}
		
		return $sum;
	}
}

$figuresCollection = new FiguresCollection();
	
$figuresCollection->addFigure(new Disk(2));
$figuresCollection->addFigure(new Disk(3));

echo $figuresCollection->getTotalSquare() . "\n";
echo $figuresCollection->getTotalPerimeter() . "\n";