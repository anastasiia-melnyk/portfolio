<?php
/*
Завдання 33.12. Нехай GET параметрами в адресний рядок передаються назва класу та його метод.
Перевірте, чи існує такий клас. Якщо існує - перевірте існування переданого методу. Якщо і метод існує
- створіть об'єкт цього класу, викличте зазначений метод і виведіть результат його роботи на екран.
*/

class Test1
{
	public function method1()
	{
		return 'method1';
	}
}

$test1 = new Test1();
$className = get_class($test1);

// Перевіряємо, чи є параметри "className" та "methodName" у GET-запиті
if (isset($_GET["className"]) && isset($_GET["methodName"])) {
    $classNameFromGet = $_GET["className"];
    $methodNameFromGet = $_GET["methodName"];

    // Перевірка наявності класу
    if (class_exists($classNameFromGet)) {
        // Перевірка наявності методу
        if (method_exists($classNameFromGet, $methodNameFromGet)) {
            $testInstance = new $classNameFromGet; // Створюємо екземпляр класу
            echo $testInstance->{$methodNameFromGet}(); // Викликаємо метод
        } else {
            echo 'Method does not exist';
        }
    } else {
        echo 'Class does not exist';
    }
} else {
    echo 'Parameters "className" or "methodName" not provided';
}