<?php
/*
Завдання 33.14. Дано масив із властивостями класу. Дано також клас, що має частину з цих властивостей.
Переберіть цей масив циклом, для кожної властивості перевірте, чи існує вона в класі і, якщо існує,
виведіть на екран значення цієї властивості.
*/

class City
{
	public $name;
	public $foundation;
	public $population;

	public function __construct($name, $foundation, $population)
	{
		$this->name = $name;
		$this->foundation = $foundation;
		$this->population = $population;
	}
}

$city = new City('Kyiv', 482, 3000000);

$props = ['name', 'foundation', 'population', 'square'];

foreach ($props as $value) {
	if (property_exists('City', $value))
	echo $city->$value."\n";
}