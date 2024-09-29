<?php
/*
Завдання 24.1. Самостійно створіть, описані в прикладах уроку, класи Arr і SumHelper.

Завдання 24.2. Створіть клас AvgHelper з методом getAvg, який параметром буде приймати масив і
повертатиме середнє арифметичне цього масиву (сума елементів ділитиме на кількість).

Завдання 24.3. Додайте в клас AvgHelper ще й метод getMeanSquare, який параметром буде приймати масив і
повертатиме середнє квадратичне цього масиву (квадратний корінь, витягнутий із суми квадратів
елементів, поділеної на кількість).

Завдання 24.4. Додайте в клас Arr метод getAvgMeanSum, який буде знаходити суму середнього
арифметичного і середнього квадратичного з масиву $this->nums.
*/

class SumHelper
{
	public function getSum2($arr)
	{
		return $this->getSum($arr,2);
	}

	public function getSum3($arr)
	{
		return $this->getSum($arr,3);
	}

	private function getSum($arr, $power)
	{
		$sum = 0;

		foreach ($arr as $elem) {
			$sum += pow($elem, $power);
		}

		return $sum;
	}
}

class AvgHelper
{
	public function getAvg($arr = [])
	{
		return array_sum($arr) / count($arr);
	}

	public function getMeanSquare($arr = [])
	{
		$sum = 0;

		foreach ($arr as $elem) {
			$sum += pow($elem, 2);
		}

		return sqrt($sum / count($arr));
	}
}

class Arr
{
	private $nums = [];
	private $sumHelper;
	private $avgHelper;

	public function __construct()
	{
		$this->sumHelper = new SumHelper;
		$this->avgHelper = new AvgHelper;
	}

	public function getSum23()
	{
		$nums = $this->nums;

		return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
	}

	public function getAvgMeanSum()
	{
		$nums = $this->nums;

		return $this->avgHelper->getAvg([1,2,3]) + $this->avgHelper->getMeanSquare([4,5,6]);
	}

	public function add($num)
	{
		$this->nums[] = $num;
	}
}

$arr = new Arr;
$arr->add(1);
$arr->add(2);
$arr->add(3);

echo $arr->getSum23() . "\n";
echo $arr->getAvgMeanSum() . "\n";