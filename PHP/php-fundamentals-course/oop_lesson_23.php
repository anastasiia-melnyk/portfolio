<?php
/*
Завдання 23.1. Створіть клас Product (продукт), у якому будуть такі властивості: name (назва продукту),
price (ціна).

Завдання 23.2. Створіть об'єкт класу Product, запишіть його у змінну $product1.

Завдання 23.3. Присвойте значення змінної $product1 у змінну $product2. Перевірте те, що обидві змінні
посилаються на один і той самий об'єкт.
*/

class Product
{
	public $name;
	public $price;

	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
}

$product1 = new Product('apple', 20);

$product2 = $product1;

echo $product1->name.' '.$product1->price . "\n";
echo $product2->name.' '.$product2->price . "\n";