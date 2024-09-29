<?php
/*
Завдання 25.1. Створіть клас Product (товар), у якому будуть приватні властивості: name (назва
товару), price (ціна за штуку) і quantity (кількість). Нехай усі ці властивості будуть доступні тільки
для читання.

Завдання 25.2. Додайте в клас Product метод getCost, який буде знаходити повну вартість продукту (сума
помножити на кількість).

Завдання 25.3. Створіть клас Cart (кошик). Цей клас буде зберігати список продуктів (об'єктів класу
Product) у вигляді масиву. Нехай продукти зберігаються у властивості products.

Завдання 25.4. Реалізуйте в класі Cart метод add для додавання продуктів.

Завдання 25.5. Реалізуйте в класі Cart метод remove для видалення продуктів. Метод має приймати
параметром назву продукту, що видаляється.

Завдання 25.6. Реалізуйте в класі Cart метод getTotalCost, який буде знаходити сумарну вартість
продуктів.

Завдання 25.7. Реалізуйте в класі Cart метод getTotalQuantity, який знаходитиме сумарну кількість
продуктів (тобто суму властивостей quantity усіх продуктів).

Завдання 25.8. Реалізуйте в класі Cart метод getAvgPrice, який буде знаходити середню вартість
продуктів (сумарна вартість ділити на кількість усіх продуктів).
*/

class Product
{
	private $name;
	private $price;
	private $quantity;

	public function __construct($name, $price, $quantity)
	{
		$this->name = $name;
		$this->price = $price;
		$this->quantity = $quantity;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getPrice()
	{
		return $this->price;
	}

	public function getQuantity()
	{
		return $this->quantity;
	}

	public function getCost()
	{
		return $this->quantity * $this->price;
	}

}

class Cart
{
	private $products = [];

	public function add($product)
	{
		$this->products[] = $product;
	}

	public function remove($name)
	{
		foreach ($this->products as $key => $elem) {
			if ($elem == $name) {
				unset($this->products[$key]);
			}
		}
	}

	public function getTotalCost()
	{
		$sum = 0;

		foreach ($this->products as $product) {
			$sum += $product->getPrice();
		}

		return $sum;
	}

	public function getTotalQuantity()
	{
		$sum = 0;

		foreach ($this->products as $product) {
			$sum += $product->getQuantity();
		}

		return $sum;
	}

	public function getAvgPrice()
	{
		return $this->getTotalCost() / $this->getTotalQuantity();
	}
}

$cart = new Cart();

$cart->add(new Product('banana', 10, 1));
$cart->add(new Product('lemon', 20, 1));
$cart->add(new Product('apple', 30, 1));

echo $cart->getAvgPrice();