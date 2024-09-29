<?php
/*
Завдання 17.1. Створіть клас Arr, який зберігатиме масив чисел і обчислюватиме суму цих чисел за
допомогою методу getSum. Числа повинні додаватися по одному за допомогою методу add, або групою за
допомогою методу push.

Завдання 17.2. Додайте в клас Arr ще один метод append, який параметром прийматиме масив чисел і
додаватиме ці числа в кінець масиву, що зберігається в об'єкті.
Зробіть так, щоб методи викликалися не окремо, а ланцюжком. Передбачається, що методи add і append
можна буде використовувати в будь-якому порядку:

echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();
*/

class Arr
{
	private $numbers = [];

	public function add($number)
	{
		$this->numbers[] = $number;
		return $this;
	}

	public function append($arrNumbers = [])
	{
		$this->numbers = array_merge($this->numbers, $arrNumbers);
		return $this;
	}

	public function getSum()
	{
		return array_sum($this->numbers);
	}
}

echo (new Arr)->add(1)->append([2, 3, 4])->add(5)->getSum();