<?php
/*
Завдання 18.1. Напишіть реалізацію методів для класу ArrayAvgHelper.
*/

class ArrayAvgHelper
{
	/*
	Знаходить суму перших ступенів елементів масиву:
	*/

	public function getAvg1($arr)
	{
		return $this->getSum($arr, 1);
	}

	/*
	Знаходить суму других ступенів елементів масиву і витягує з неї квадратний корінь:
	*/

	public function getAvg2($arr)
	{
		return $this->calcSqrt($this->getSum($arr, 2),2);
	}

	/*
	Знаходить суму третіх ступенів елементів масиву і витягує з неї кубічний корінь:
	*/

	public function getAvg3($arr)
	{
		return $this->calcSqrt($this->getSum($arr, 3),3);
	}

	/*
	Знаходить суму четвертих ступенів елементів масиву і витягує з неї корінь четвертого ступеня:
	*/

	public function getAvg4($arr)
	{
		return $this->calcSqrt($this->getSum($arr, 4),4);
	}

	/*
	Допоміжний метод, який параметром приймає масив і ступінь і повертає суму ступенів елементів масиву:
	*/

	private function getSum($arr, $power)
	{
		$sum = 0;

		foreach ($arr as $elem) {
			$sum += pow($elem, $power);
		}

		return $sum;
	}

	/*
	Допоміжний метод, який параметром приймає ціле число і ступінь і повертає корінь заданого ступеня з
	числа:
	*/

	private function calcSqrt($num, $power)
	{
		$sqrt = pow($num, 1/$power);
		return $sqrt;
	}
}

// Перевірка

// Створюємо об'єкт класу ArrayAvgHelper
$arrayAvgHelper = new ArrayAvgHelper();

// Приклад масиву
$arr = [1, 2, 3, 4, 5];

// Перевіряємо методи класу
$avg1 = $arrayAvgHelper->getAvg1($arr);
$avg2 = $arrayAvgHelper->getAvg2($arr);
$avg3 = $arrayAvgHelper->getAvg3($arr);
$avg4 = $arrayAvgHelper->getAvg4($arr);

// Виводимо результати
echo "Average of first degrees: " . $avg1 . "\n";
echo "Average of second degrees: " . $avg2 . "\n";
echo "Average of the third degree: " . $avg3 . "\n";
echo "Average of the fourth degree: " . $avg4 . "\n";