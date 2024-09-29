<?php
/*
Завдання 35.4. Створіть аналогічний клас Rectangle (прямокутник), у якого буде дві приватні
властивості: $a для ширини і $b для довжини. Цей клас також повинен успадковувати від класу Figure і
реалізовувати його методи.

Завдання 35.5. Додайте в клас Figure метод getSquarePerimeterSum, який буде знаходити суму площі та
периметра.
*/

abstract class Figure
{
	abstract public function getSquare();

	abstract public function getPerimeter();

	public function getRatio()
	{
		return $this->getSquare() / $this->getPerimeter();
	}

	public function getSquarePerimeterSum()
	{
		return $this->getSquare() + $this->getPerimeter();
	}
}

class Quadrate extends Figure
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

class Rectangle extends Figure
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
		return ($this->a + $this->b) * 2;
	}
}

$rectangle = new Rectangle(3,3);
echo $rectangle->getSquare().'  '.$rectangle->getPerimeter().'  '.$rectangle->getRatio().'  '.$rectangle->getSquarePerimeterSum();