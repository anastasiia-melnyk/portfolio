<?php
/*
Завдання 33.2. Створіть два класи: Test1 і Test2. Нехай обидва класи мають властивість name.
Створіть деяку кількість об'єктів цих класів і запишіть у масив $arr у довільному порядку.
Переберіть цей масив циклом і для кожного об'єкта виведіть значення його властивості name та ім'я
класу, якому належить об'єкт.
*/

class Test1
{
	public $name;

	public function __construct($name)
    {
	    $this->name = $name;
    }
}

class Test2
{
	public $name;

	public function __construct($name)
    {
        $this->name = $name;
    }
}


$arr = [
	new Test1('Kostia'),
	new Test2('Dmytro'),
	new Test2('Pavlo'),
	new Test1('Maksym'),
	new Test1('Andriy'),
	new Test2('Mykola')
];

foreach ($arr as $elem) {
	echo $elem->name . ' Class Name' . ' - ' . get_class($elem) . "\n";
}