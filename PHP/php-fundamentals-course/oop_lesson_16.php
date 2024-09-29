<?php
/*
Завдання 16.1. Дано масив Arr:
	class Arr
	{
		private $numbers = [];

		public function __construct($numbers)
		{
			$this->numbers = $numbers;
		}

		public function add($number)
		{
			$this->numbers[] = $number;
		}

		public function getSum()
		{
			return array_sum($this->numbers);
		}
	}
Викличте метод getSum відразу після створення об'єкта.
*/

class Arr
{
	private $numbers = [];

	public function __construct($numbers)
	{
		$this->numbers = $numbers;
	}

	public function add($number)
	{
		$this->numbers[] = $number;
	}

	public function getSum()
	{
		return array_sum($this->numbers);
	}
}

echo (new Arr([10, 20, 30]))->getSum();