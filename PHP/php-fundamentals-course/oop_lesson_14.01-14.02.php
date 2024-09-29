<?php
/*
Завдання 14.1. Створіть клас City (місто), у якого будуть такі властивості: name (назва), foundation
(дата заснування), population (населення). Створіть об'єкт цього класу.

Завдання 14.2. Нехай дано змінну $props, у якій зберігається масив назв властивостей класу City.
Переберіть цей масив циклом foreach і виведіть на екран значення відповідних властивостей.
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

$props = ['name', 'foundation', 'population'];

foreach ($props as $value) {
	echo $city->$value."\n";
}