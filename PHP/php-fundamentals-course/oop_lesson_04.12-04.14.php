<?php
/*
Завдання 4.12. Створіть клас Rectangle (прямокутник), у якому у властивостях будуть записані ширина і
висота.

Завдання 4.13. У класі Rectangle створіть метод getSquare, який буде повертати площу цього прямокутника.

Завдання 4.14. У класі Rectangle створіть метод getPerimeter, який буде повертати периметр цього
прямокутника.
*/

class Rectangle
{
	public $width;
	public $height;

	public function getSquare()
	{
		return $this->width * $this->height;
	}

	public function getPerimeter()
	{
		return ($this->width + $this->height) * 2;
	}
}

$rectangle = new Rectangle();
$rectangle->width = 3;
$rectangle->height = 3;

echo $rectangle->getSquare() . "\n";
echo $rectangle->getPerimeter() . "\n";