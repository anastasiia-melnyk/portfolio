<?php
/*
Завдання 13.1. Створіть клас Arr із приватною властивістю private $numbers = []. Додайте метод add,
який параметром буде приймати масив чисел. Усі числа з цього масиву мають додаватися в кінець масиву
$this->numbers.

Завдання 13.2. Додайте метод getAvg, який буде знаходити середнє арифметичне переданих чисел.
*/

class Arr
{
	public $numbers = [];

	public function __construct($numbers)
	{
		$this->numbers = $numbers;
	}

	public function add($arrNumbers = [])
	{
		return $this->numbers = array_merge($this->numbers, $arrNumbers);
	}

	public function getAvg()
	{
		return array_sum($this->numbers) / count($this->numbers);
	}
}

$arr = new Arr([1,2,3]);

$arr->add([4,5,6]);
echo $arr->getAvg();