<?php
/*
Завдання 11.1. Створіть клас City (місто), у якого будуть такі властивості: name (назва міста),
population (кількість населення).

Завдання 11.2. Створіть 5 об'єктів класу City. Заповніть їх даними та запишіть у масив.

Завдання 11.3. Переберіть створений масив із містами циклом і виведіть міста та їхнє населення на екран.
*/

class City
{
	public $name;
	public $population;

	public function __construct($name, $population)
	{
		$this->name = $name;
		$this->population = $population;
	}
}

$cities = [
	new City('Kyiv', 5000000),
	new City('Odesa', 4000000),
	new City('Dnipro',3000000),
	new City('Kharkiv', 2000000),
	new City('Lviv', 1000000)
];

foreach ($cities as $city) {
	echo $city->name.' '.$city->population."\n";
}