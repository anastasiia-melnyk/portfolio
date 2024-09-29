<?php
/*
Завдання 30.2. Створіть клас Num, у якого будуть дві приватні статичні властивості: num1 і num2. Нехай
за замовчуванням у властивості num1 зберігається число 2, а у властивості num2 - число 3.

Завдання 30.3. Створіть у класі Num метод getSum, який виводитиме на екран суму значень властивостей
num1 і num2.
*/

class Num
{
	private static $num1 = 2;
	private static $num2 = 3;

	public static function getSum()
	{
		return self::$num1 + self::$num2;
	}
}

echo Num::getSum();