<?php
/*
Завдання 30.4. Додайте в клас Geometry із уроку метод, який знаходитиме об'єм кулі за радіусом. За
допомогою цього методу виведіть на екран об'єм кулі з радіусом 10.
*/

class Geometry
{
	private static $pi = 3.14;

	public static function getCircleSquare($radius)
	{
		return self::$pi * $radius * $radius;
	}

	public static function getCircleСircuit($radius)
	{
		return 2 * self::$pi * $radius;
	}

	public static function getCircleVolume($radius)
	{
		return 4/3 * self::$pi * pow($radius,3);
	}
}

echo Geometry::getCircleVolume(10);