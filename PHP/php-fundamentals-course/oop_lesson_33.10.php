<?php
/*
Завдання 33.10. Нехай GET параметром в адресний рядок передається назва класу. Перевірте, чи існує
такий клас. Виведіть відповідне повідомлення на екран.
*/

class Test1
{
	public $prop;
}

$test1 = new Test1();
$className = get_class($test1);

if (isset($_GET["className"])) {
    $classNameFromGet = $_GET["className"];

    if (class_exists($classNameFromGet)) {
        echo 'Class exists';
    } else {
        echo 'Class does not exist';
    }
} else {
    echo 'Parameter "className" not provided';
}