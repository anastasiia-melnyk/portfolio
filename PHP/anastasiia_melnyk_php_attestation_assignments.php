<?php
// Завдання №1. За допомогою функції list вивести у змінній vegetable перший елемент масиву - помідор.

// 1-й варіант
$box = array('помідор','яблуко');
list($vegetable, $fruit) = $box;

echo "Завдання №1, варіант №1:" . "\n";
echo $vegetable;
echo  "\n" . "\n";

// 2-й варіант
$box = array('помідор','яблуко');
list($vegetable, ) = $box;

echo "Завдання №1, варіант №2:" . "\n";
echo $vegetable;
echo  "\n" . "\n";

// Завдання №2. Вивести кількість елементів масиву.

$box = array(1 => 'помідор', '2' => 'яблуко', '1key' => 'груша', 'персик', true => 'апельсин');

echo "Завдання №2:" . "\n";
echo count ($box);
echo  "\n" . "\n";

// Завдання №3. Що виведеться?

// Відповідь: виведеться 10. unset($a) видаляє посилання на $a, але вміст $b залишається.

$a = 10;
$b = &$a;
unset ($a);

echo "Завдання №3:" . "\n";
echo $b;
echo  "\n" . "\n";

// Завдання №4. Що буде, якщо порівняти дві змінні?

$var1 = 4;
$var2 = '4';

echo "Завдання №4:" . "\n";
var_export($var1 == $var2);
echo "\n";
// Відповідь: у результаті виведе true, оскільки знак рівності «==» порівнює змінні тільки за значенням, але не за
// типом даних - у цьому прикладі 4=4.

var_export($var1 === $var2);
// Відповідь: у результаті виведе false, оскільки знак рівності «===» порівнює змінні і за значенням, і за типом.
// У цьому випадку $var1 - integer, а $var2 - string, тому змінні не рівні.
echo  "\n" . "\n";

// Завдання №5. Що буде в результаті порівняння?

// Відповідь: у результаті порівняння отримаємо true, оскільки змінні мають однаковий тип і однакове значення.

echo "Завдання №5:" . "\n";
var_export('hi' >= 'hi');
echo  "\n" . "\n";

// Завдання №6. Додати 4 до третього елемента масиву. Вивести результуючий масив.

$A = array(1,6,'2.2e2',14);
$A[2] = $A[2] + 4;

echo "Завдання №6:" . "\n";
var_dump($A);
echo  "\n" . "\n";

// Завдання №7. Вивести кількість повторень кожного елемента в масиві:

// 1-й варіант
$B = array("pen", "pensil", "pen", "book", "pensil");

echo "Завдання №7. Варіант №1:" . "\n";
var_dump(array_count_values($B));
echo  "\n" . "\n";

// 2-й варіант
$B = array("pen", "pensil", "pen", "book", "pensil");
$count = [];

foreach ($B as $elem) {
  if (!isset($count[$elem])) {
        $count[$elem] = 1;
      } else {
        $count[$elem]++;
      }
  }

echo "Завдання №7. Варіант №2:" . "\n";
var_dump($count);
echo  "\n" . "\n";

// Завдання №8. Як необхідно змінити ініціалізацію масиву, щоб значення «California» мало індекс = 4 без явного
// завдання 4 => «California»:

$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");

// Відповідь: потрібно додати індекс 1 тільки першому елементу масиву («Alabama»), інші індекси проставляться
// автоматично в порядку зростання, таким чином елемент масиву «California» матиме індекс 4.

$states_of_the_USA = array(1 => "Alabama", "Colorado", "Hawaii", "California");

echo "Завдання №8:" . "\n";
var_dump($states_of_the_USA)."\n";
echo  "\n" . "\n";

// Завдання №9. Вивести всі елементи масиву за допомогою циклу for:

$states_of_the_USA = array("Alabama", "Colorado", "Hawaii", "California");

echo "Завдання №9:" . "\n";
for ($i = 0; $i < count($states_of_the_USA); $i++) {
    echo $states_of_the_USA[$i]."\n";
}
echo  "\n" . "\n";

// Завдання №10. Що виведеться в цьому прикладі?

// Відповідь: виведеться «Масив не визначений», оскільки спочатку масив було визначено як ($A = array(1, 2, 4, 6)),
// а потім за допомогою unset($A) масив було видалено.

$A = array(1, 2, 4, 6);
unset($A);

echo "Завдання №10:" . "\n";
if (isset($A)) echo "Масив визначений";
else echo "Масив не визначений";
echo  "\n" . "\n";

// Завдання №11. Що виведеться у випадку а) і у випадку б) у var_dump($var)? Чому?
// а) $var = var1 + var2
// б) $var = var2 + var1

// Відповідь:
// у варіанті а) результуючим масивом буде:
// array(4) { [0]=> string(3) "car" [1]=> string(7) "bicycle" [3]=> string(4) "auto" [2]=> string(3) "car".
// Оскільки елементи з ключами 0 і 1 існують в обох масивах, під час злиття масивів будуть використані елементи з
// першого масиву, а відповідні елементи з другого масиву будуть проігноровані. До результуючого масиву з першого
// масиву потраплять усі елементи, а з другого масиву - тільки 3-й елемент [2] => "car"

// у варіанті б) результуючим масивом буде:
// array(4) { [0]=> string(4) "bike" [1]=> string(7) "bicycle" [2]=> string(3) "car" [3]=> string(4) "auto" }.
// Оскільки елементи з ключами 0 і 1 існують в обох масивах, під час злиття масивів будуть використані елементи з
// другого масиву, а відповідні елементи з першого масиву будуть проігноровані. У результуючий масив із другого масиву
// потраплять усі елементи, а з першого масиву - тільки 3-й елемент [3] => "auto".

$var1 = array(0 => "car", 1 => "bicycle", 3 => "auto");
$var2 = array("bike", "bicycle", "car");

echo "Завдання №11:" . "\n";
echo "Перший масив (var1):\n";
var_dump($var1);

echo "Другий масив (var2):\n";
var_dump($var2);
echo  "\n" . "\n";

// Завдання №12. Що виведеться в цьому випадку і чому?

// Відповідь: виведеться 3 2 1. $A-- - це постфіксний декремент, який спочатку повертає значення $A (у такому
// випадку 3), а потім з кожним циклом зменшує $A на одиницю.

$A = 3;

echo "Завдання №12:" . "\n";
for ($k=0; $k<3; $k++) {
   echo $A-- . "\n";
}
echo  "\n" . "\n";

// Завдання №13. Що виведе var_dump($var1 == $var2)?

// Відповідь: результатом var_dump($var1 == $var2) буде bool(true), оскільки обидва масиви мають однакові
// пари "ключ => значення".

$var1 = array("pen","pencil", "table");
$var2 = array(1 => "pencil", 2 => "table", 0 => "pen");

echo "Завдання №13:" . "\n";
echo "Перший масив (var1):\n";
var_dump($var1);

echo "Другий масив (var2):\n";
var_dump($var2);
echo  "\n" . "\n";

// Завдання №14. Вивести фразу "You are beautiful", використовуючи рядковий оператор.

// 1-й варіант - конкатенація
$a = 'You ';
$b = 'are ' ;
$c = 'beautiful';

echo "Завдання №14. Варіант №1:" . "\n";
echo $a . $b . $c."\n"."\n";

// 2-й варіант - присвоювання з конкатенацією
$a = 'You ';
$b = $a . 'are ';
$c = $b . 'beautiful';

echo "Завдання №14. Варіант №2:" . "\n";
echo $c."\n"."\n";

// 3-й варіант - присвоювання з конкатенацією
$a = 'You are ';
$a .= 'beautiful';

echo "Завдання №14. Варіант №3:" . "\n";
echo $a;
echo  "\n" . "\n";

// Завдання №15. Чому буде дорівнювати $var2?

// Відповідь: $var2 = 50. Спочатку було додано посилання на $var1 і $var2 дорівнювала 3. Потім $var2 було присвоєно
// нове значення - 50.

$var1 = 3;
$var2 = &$var1; 
$var2=50;

echo "Завдання №15:" . "\n";
echo $var2;
echo  "\n" . "\n";

// Завдання №16. Трьома способами перетворити змінну $var у рядок.

// 1-й спосіб
$var1 = 5;

echo "Завдання №16. Спосіб №1:" . "\n";
var_dump(strval($var1));
echo  "\n";

// 2-й спосіб
$var1 = 6;
$var2 = (string)$var1;

echo "Завдання №16. Спосіб №2:" . "\n";
var_dump($var2)."\n"."\n";
echo  "\n";

// 3-й спосіб
$var1 = 7;
settype($var1,"string");

echo "Завдання №16. Спосіб №3:" . "\n";
var_dump($var1)."\n"."\n";
echo  "\n";

// ще можна так
$var1 = 8;
$var2 = "$var1";

echo "Завдання №16. Додатковий спосіб:" . "\n";
var_dump($var2);
echo  "\n" . "\n";

// Завдання №17. Використовуючи функцію settype, надати змінній $a значення 1, якщо $a="123a".

$a = "123a";
$a = substr($a, 0, 1);
settype($a, "integer");

echo "Завдання №17:" . "\n";
var_dump($a);
echo  "\n" . "\n";

// Завдання №18. Перетворити $a="abradсabra" в "abracbra"(видалити символ "d" і третю букву "a").

$a = "abradcabra";

echo "Завдання №18:" . "\n";
echo substr_replace(str_replace('d', '', $a), '', 5, 1);
echo  "\n" . "\n";

// Завдання №19. Які ключі та значення містить масив $c?

// Відповідь: array(5) { [0]=> string(2) "aa" ["a"]=> int(1) [2]=> string(1) "a" [3]=> string(1) "a" [1]=> int(2).
// До виконання циклу масив був такий:
// array(5) { [0]=> string(1) "a" ["a"]=> int(1) [2]=> string(1) "a" [3]=> string(1) "a" [1]=> int(2) }.
// У результаті виконання циклу елемент масиву $c[0] = "a" було змінено на $c[0] = "aa"

$a = 1;
$p = "a";
define("b",2);
$c = array();
$c[] = $p;
$c[$p] = $a;
$c[b] = $p;
$c[] = "a";
$c[$a] = b;

for ($i = 0; $i <= b; $i++)
{
        if ($c[$i] == "a")
        {
                $c[$i] = "aa";
                break;
        }
}

echo "Завдання №19:" . "\n";
var_dump($c);
echo  "\n" . "\n";

// Завдання №20. Розробити функцію обчислення факторіалу заданого числа (n!)

// 1-й варіант - з використанням функції array_product
function factorialArrayProduct($n)
{
  if ($n < 0) {
    return 0;
  }
  if ($n === 0) {
    return 1;
  }
$arr = range(1, $n);
return array_product($arr);
}

echo "Завдання №20. Варіант №1:" . "\n";
echo factorialArrayProduct(5)."\n"."\n";

// 2-й варіант - з використанням циклу for
function factorial($n)
{
  if ($n < 0) {
    return 0;
  }
  if ($n == 0) {
    return 1;
  }
  for ($i = 1, $result = 1; $i <= $n; $i++) { 
    $result *= $i;
  }
  return $result;
}

echo "Завдання №20. Варіант №2:" . "\n";
echo factorial(5)."\n"."\n";
 
// 3-й варіант - з рекурсією
function factorialRecursion($n)
{
  if ($n < 0) {
    return 0;
  }
  if ($n === 0) {
    return 1;
  }
  return $n * factorialRecursion($n - 1);
}

echo "Завдання №20. Варіант №3:" . "\n";
echo factorialRecursion(5);
echo "\n"."\n";

// Завдання №21. Відсортувати масиви: імена в алфавітному порядку і в порядку спадання, а вік - у порядку зростання.

// Цикл foreach оперує не вихідним масивом, а його копією. Це означає, що будь-які зміни, які вносяться в масив,
// не можуть бути «видимі» з тіла циклу. Що дозволяє, наприклад, як масив використовувати не тільки змінну,
// а й результат роботи якої-небудь функції, що повертає масив (у цьому випадку функція буде викликана всього один раз -
// до початку циклу, а потім робота буде проводитися з копією повернутого значення).
//
// Приклад:
// foreach (масив as $значення)
// команди;

$spisok = array(
    'roz1' => array('id'=>'1', 'age'=>'19', 'gender'=>'m', 'login'=>'Kos'),
    'roz2' => array('id'=>'2', 'age'=>'12', 'gender'=>'m', 'login'=>'Oleg'),
    'roz3' => array('id'=>'3', 'age'=>'17', 'gender'=>'g', 'login'=>'Sasha'),
    'roz4' => array('id'=>'4', 'age'=>'14', 'gender'=>'m', 'login'=>'Roma'),
    'roz5' => array('id'=>'5', 'age'=>'15', 'gender'=>'g', 'login'=>'Galina'),
    'roz6' => array('id'=>'6', 'age'=>'16', 'gender'=>'g', 'login'=>'Nadi'),
    'roz7' => array('id'=>'7', 'age'=>'13', 'gender'=>'g', 'login'=>'Evgenia'),
    'roz8' => array('id'=>'8', 'age'=>'18', 'gender'=>'m', 'login'=>'Sveta'),
    'roz9' => array('id'=>'9', 'age'=>'11', 'gender'=>'g', 'login'=>'Julia'),
);

// 1-й варіант
$spisok_login = array();
foreach ($spisok as $key => $arr) {
    $spisok_login[$key] = $arr['login'];
}

$spisok_age = array();
foreach ($spisok as $key => $arr) {
    $spisok_age[$key] = $arr['age'];
}

array_multisort($spisok_login, SORT_DESC, $spisok_age, SORT_ASC, $spisok);
echo "Завдання №21. Варіант №1:" . "\n";
print_r($spisok);
echo "\n"."\n";

// 2-й варіант

function arraySort($a,$b)
{
    if ($a['login'] == $b['login']) {
        if ($a['age'] == $b['age']) {
            return 0;
        }
        return ($a['age'] < $b['age']) ? -1 : 1;
    }
    return ($a['login'] > $b['login']) ? -1 : 1;
}

uasort($spisok, "arraySort");
echo "Завдання №21. Варіант №2:" . "\n";
print_r($spisok);
echo "\n"."\n";

// Завдання №22. Умовні оператори if, else, if.

// 1. Створити змінну $age і присвоїти їй довільне числове значення.
// 2. Написати конструкцію if, яка виводить фразу: «Вам ще працювати і працювати», якщо значення $age буде
//    від 18 до 59 включно (використовувати знак більше або дорівнює, а також менше або рівно).
// 3. Розширити конструкцію if, виводячи фразу: «Досить працювати», якщо $age більше за 59.
// 4. Розширити конструкцію if-else, виводячи фразу: «Маленький ще працювати - йди вчитися», якщо $age буде
//    від 1 до 17 включно (використовувати знак строго більше, а також строго менше).
// 5. Доповнити конструкцію if-elseif, виводячи фразу: «Ти паранормальний!», якщо $age не потрапляє в жоден діапазон.

$age = 20;

echo "Завдання №22:" . "\n";
if ($age >= 18 && $age <= 59) {
  echo 'Вам ще працювати і працювати';
} elseif ($age > 59) {
    echo 'Досить працювати';
} elseif ($age > 0 && $age < 18) {
    echo 'Маленький ще працювати - йди вчитися';
} else {
    echo 'Ти паранормальний!';
}
echo "\n"."\n";

// Завдання №23. Використовуючи цикл for, вивести всі непарні числа від 1 до 59 (у стовпчик).

echo "Завдання №23:" . "\n";
for($i = 1; $i <= 59; $i++) {
  if ($i % 2 != 0) {
      echo $i."\n";
    }
}
echo "\n"."\n";

// Завдання №24. Створити константу та присвоїти їй значення. Перевірити чи присвоїлося значення константі,
// вивести значення, спробувати змінити значення.

const PI = 3.14;

echo "Завдання №24:" . "\n";
echo "Константа PI оголошена. - " . PI . '.' . "\n";

const PI = 5;

echo 'Значення константи PI - '.PI.'. Не можна змінити значення константи, оскільки константа вже оголошена.';
echo "\n"."\n";

// Завдання №25. Задано масив $arr = array(0=>1, 1=>-3, 2=>-9, 3=>1, 4=>3, 5=>12, 6=>-1, 7=>0).
// Обчислити суму всіх елементів масиву з непарними індексами.

$arr = array(0=>1, 1=>-3, 2=>-9, 3=>1, 4=>3, 5=>12, 6=>-1, 7=>0);
$sum = 0;

foreach ($arr as $key => $elem) {
    if ($key % 2 != 0) {
        $sum += $elem;
    }
}

echo "Завдання №25:" . "\n";
echo $sum;
echo "\n"."\n";

// Завдання №26. Дано масив $arr = array(0=>1.2, 1=>3, 2=>-3.2, 4=>1.34, 5=>-0.3, 6=>1.2, 7=>1.93, 8=>0.67).
// Відсортувати елементи масиву в порядку зростання та вивести на екран.

// за допомогою функції sort - в порядку зростання, без збереження ключів
$arr = array(0=>1.2, 1=>3, 2=>-3.2, 4=>1.34, 5=>-0.3, 6=>1.2, 7=>1.93, 8=>0.67);
sort($arr);

echo "Завдання №26. Варіант №1:" . "\n";
var_dump($arr);
echo "\n"."\n";

// за допомогою функції asort - в порядку зростання, зі збереженням ключів
$arr = array(0=>1.2, 1=>3, 2=>-3.2, 4=>1.34, 5=>-0.3, 6=>1.2, 7=>1.93, 8=>0.67);
asort($arr);

echo "Завдання №26. Варіант №2:" . "\n";
var_dump($arr);
echo "\n"."\n";

// Завдання №27. Задано масив $arr = array(0=>1, 1=>-2, 2=>-9, 4=>3, 5=>1, 6=>12, 7=>-1, 8=>0).
// Знайти максимальний і мінімальний елементи масиву та вивести їх.

$arr = array(0=>1, 1=>-2, 2=>-9, 4=>3, 5=>1, 6=>12, 7=>-1, 8=>0);

echo "Завдання №27:" . "\n";
echo 'Maximum array element: '.max($arr)."\n";
echo 'Minimum array element: '.min($arr);
echo "\n"."\n";

// Завдання №28. У змінній $year можна задати значення року в діапазоні від 0 до 9999. Визначити, чи є рік, заданий
// у змінній $year, високосним.

$year = 2021;

echo "Завдання №28:" . "\n";
if ($year >= 0 && $year <= 9999) {
  if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo $year.' рік - високосний.';
  } else {
    echo $year.' рік - невисокосний.';
  }
} else {
  echo 'Введіть число від 0 до 9999.';
}
echo "\n"."\n";

// Завдання №29. У масиві міститься 5 чисел. Вивести добуток числа на його квадрат у вигляді 2^2=4.

// 1-й варіант
$arr = array(2,3,4,5,6);

echo "Завдання №29. Варіант №1:" . "\n";
foreach ($arr as $elem) {
  echo $elem.' ^ '.$elem.' = '.pow($elem,2)."\n";
}
echo "\n"."\n";

// 2-й варіант
$arr = array(2,3,4,5,6);

echo "Завдання №29. Варіант №2:" . "\n";
foreach ($arr as $elem) {
  echo $elem.' ^ '.$elem.' = '.$elem*$elem."\n";
}
echo "\n"."\n";

// Завдання №30. У рядку $string змініть "W" на "Q". Не використовуйте рядкові функції.

$string = 'Winter is coming!';
$string[0] = 'Q';

echo "Завдання №30:" . "\n";
echo $string;
echo "\n"."\n";

// Завдання №31. Виведіть значення змінної $string, використовуючи символічне посилання.

$string = 'Some text';
$link = "string";

echo "Завдання №31:" . "\n";
echo $$link;
echo "\n"."\n";

// Завдання №32. Виведіть у браузері текстове поле із заповненим у ньому значенням $string в один рядок.
?>
    <form action="" method="GET">
        <input type="text" name="string" value="Hello, World!">
        <input type="submit" value="Submit">
    </form>
<?php
if (isset($_REQUEST['string'])) {
    $string = $_REQUEST['string'];
    echo $string;
}
echo "\n"."\n";
?>

<?php
// Завдання №33. Виведіть суму всіх цифр у числі $int. Використовуйте цикл while або do while.

$int = '01123581321';
$arr = str_split($int,1);
$sum = 0;
$i = 0;

while ($i < count($arr)) {
    $sum += $arr[$i];
    $i++;
}

echo "Завдання №33:" . "\n";
echo $sum;
echo "\n"."\n";

// Завдання №34. Назвіть пари ключ\значення в масиві $array.
// Додайте значення 'Jeanne d'Arc' у масив NULL.
// Виведіть масив 3-ма різними способами.

$array = array(
    FALSE => TRUE,
    TRUE => FALSE,
    NULL => array(PHP_OS, "PHP_VERSION")
);
/*
пари ключ\значення:
  0 => 1 (FALSE => TRUE)
  1 => 0 (TRUE => FALSE)
  '' => array (0 => 'Linux', 1 => 'PHP_VERSION')
*/
$array[NULL][] = "Jeanne d'Arc"; // додавання значення 'Jeanne d'Arc' у масив NULL

echo "Завдання №34:" . "\n";
print_r($array);
echo "\n";
var_dump($array);
echo "\n";
var_export($array);
echo "\n" . "\n";

// Задачі

// Задача №1. Дано масив цілих чисел $a, відсортований за зростанням, і деяке число $b. Написати функцію
// searchInArray($a, $b), яка максимально швидко визначить, чи є в масиві потрібний елемент і поверне TRUE або FALSE.

// 1-й варіант - бінарний пошук
function searchInArray($a, $b) {
    $left = 0;
    $right = count($a) - 1;

    while ($left <= $right) {
        $mid = floor(($left + $right) / 2);

        if ($a[$mid] == $b) {
            return true; // Знайдено
        } elseif ($a[$mid] < $b) {
            $left = $mid + 1; // Шукаємо в правій половині
        } else {
            $right = $mid - 1; // Шукаємо в лівій половині
        }
    }

    return false; // Не знайдено
}

$a = [15, 27, 33, 56, 67, 100];

echo "Задача №1. Варіант №1:" . "\n";
echo searchInArray($a, 56) ? 'True' : 'False'; // Виведе "True"
echo "\n" . "\n";

// 2-й варіант
function searchInArray($a, $b)
{
  foreach ($a as $value) {
    if ($value == $b) {
      return 'True';
    }
  }
  return 'False';
}

$a = [15, 27, 33, 56, 67, 100];

echo "Задача №1. Варіант №2:" . "\n";
echo searchInArray($a, 56);
echo "\n" . "\n";

// Задача №2. Дано асоціативний масив. Написати функцію arrayReverseKeys($a), яка переверне ключі цього масиву,
// використовуючи мінімальну кількість циклів. Функція повинна повертати масив як результат.

function arrayReverseKeys($a)
{
  $keys = array_reverse(array_keys($a));
  $values = array_values($a);
  return (array_combine($keys,$values));
}

$a = array('a' => 'apple', 'b' => 'banana', 'c' => 'cherry');

echo "Задача №2:" . "\n";
var_dump(arrayReverseKeys($a));
echo "\n" . "\n";

// Задача №3. Зчитати з консолі довжини катетів прямокутного трикутника та розрахувати його гіпотенузу, площу,
// кути (у градусах), периметр.

$cathetusA = readline("Enter the length of the cathetus A:");
$cathetusB = readline("Enter the length of the cathetus B:");
$hypotenuse = sqrt(pow($cathetusA,2)+pow($cathetusB,2));
$square = ($cathetusA*$cathetusB)/2;
$arcsinA = round(rad2deg(asin($cathetusA / $hypotenuse)));
$arcsinB = round(rad2deg(asin($cathetusB / $hypotenuse)));
$perimeter = ($cathetusA+$cathetusB+$hypotenuse);

echo "Задача №3:" . "\n";
echo "Length of the cathetus A: $cathetusA\n";
echo "length of the cathetus B: $cathetusB\n";
echo "Hypotenuse is equal to $hypotenuse.\n";
echo "Area is equal to $square.\n";
echo "Angle A is $arcsinA degrees.\n";
echo "Angle B is $arcsinB degrees.\n";
echo "Perimeter is equal to $perimeter\n";
echo "\n" . "\n";

// Задача №4. Знайти попередній перед максимальним за величиною елемент в масиві. (із сортуванням і без).

// 1-й варіант - з сортуванням
$arr = [10,21,5,2,76];

sort($arr);
var_dump($arr);

echo "Задача №4. Варіант №1:" . "\n";
echo $arr[count($arr)-2];
echo "\n" . "\n";

// 2-й варіант з сортуванням
$arr = [10,3,5,58,76];
$arr = array_unique($arr);

rsort($arr);

echo "Задача №4. Варіант №2:" . "\n";
echo $arr[1];
echo "\n" . "\n";

// 3-й варіант - без сортування
$arr1 = [10,3,23,5,76];
$firstMaxElem = max($arr1);
$keyMaxElem = array_search($firstMaxElem, $arr1);
unset($arr1[$keyMaxElem]); // видаляємо максимальний елемент
$secondMaxElem = max($arr1);

echo "Задача №4. Варіант №3:" . "\n";
echo $secondMaxElem;
echo "\n" . "\n";

// Задача №5. Вивести всі прості числа в діапазоні від 30 до 60.

function isSimpleNumber($x)
{
  for ($i = 2; $i < $x; $i++) {
    if ($x % $i == 0) {
        return false;
        }
    }
      return true;
}

$arr = range(30, 60);

echo "Задача №5:" . "\n";
foreach ($arr as $elem) {
    if (isSimpleNumber($elem)) {
      echo $elem."\n";
    }
  }
echo "\n" . "\n";

// Задача №6. Реалізувати функцію шифрування рядка за словником + шифр Цезаря, реалізувати функцію дешифрування.

function caesarCipherEncryption($text,$shift)
{
    $new_text = '';
    $code = $alpha = 'abcdefghijklmnopqrstuvwxyz';

    for($i=0; $i < $shift; $i++) {
        $first = mb_substr($code,0,1, 'utf-8');
        $code = mb_substr($code,1, mb_strlen($code, 'utf-8'),'utf-8').$first;
    }

    $alpha .= mb_strtoupper($alpha, 'utf-8');
    $code .= mb_strtoupper($code, 'utf-8');
    $text_length =  mb_strlen($text, 'utf-8');

    for($i = 0; $i < $text_length; $i++) {
        $char = mb_substr($text, $i, 1, 'utf-8');
        $pos = mb_strpos($alpha, $char, 0, 'utf-8');
        if($pos !== false) {
            $new_text .= mb_substr($code, $pos, 1,  'utf-8');
        } else {
            $new_text .= $char;
        }
    }
    return $new_text;
}

echo "Задача №6. Шифрування:" . "\n";
echo caesarCipherEncryption('Hello',1);
echo "\n" . "\n";

function caesarCipherDecryption($text,$shift)
{
    $new_text = '';
    $code = $alpha = 'abcdefghijklmnopqrstuvwxyz';

    for ($i = 0; $i < $shift; $i++) {
        $last = mb_substr($code, -1, 1, 'utf-8');
        $code = $last . mb_substr($code, 0, mb_strlen($code, 'utf-8') - 1, 'utf-8');
    }

    $alpha .= mb_strtoupper($alpha, 'utf-8');
    $code .= mb_strtoupper($code, 'utf-8');
    $text_length =  mb_strlen($text, 'utf-8');

    for($i = 0; $i < $text_length; $i++) {
        $char = mb_substr($text, $i, 1, 'utf-8');
        $pos = mb_strpos($alpha, $char, 0, 'utf-8');
        if($pos !== false) {
            $new_text .= mb_substr($code, $pos-$shift, 1,  'utf-8');
        } else {
            $new_text .= $char;
        }
    }
    return $new_text;
}

echo "Задача №6. Дешифрування:" . "\n";
echo caesarCipherDecryption('Ifmmp',1);
echo "\n" . "\n";

// Задача №7. Завдання на логіку «Щасливі квитки».

// Припустимо, що номер квитка складається з 6 цифр. Квиток вважається щасливим, якщо сума перших трьох цифр дорівнює
// сумі других трьох цифр. Написати функцію luckyTickets($k), яка порахує і поверне можливу кількість таких квитків,
// де $k - число цифр у квитку (парне, 2,4,6...). Квиток 000000 вважається.
// Приклади щасливих квитків: 933591, 030300, 113311.
// Зверніть увагу: кількість цифр у пропуску може бути як більшою, так і меншою за 6. Гарантована умова -
// кількість цифр парна.

// 1-й варіант
function luckyTickets($k)
{
    if ($k % 2 == 0) {
        $array_sum = array_fill(0, $k*9 + 1, 0);
        $count = pow(10, $k);

    for($i = 0; $i < $count; $i++) {
        $array_numeral = array_pad(str_split((string)$i), -$k, 0);
        $array_sum[array_sum($array_numeral)]++;
    }

    foreach($array_sum as $key => $value) {
            $array_sum[$key] = pow($value, 2);
        } 
    } else {
        return 'Enter an even number';
        }
    return array_sum($array_sum);
}

echo "Задача №7. Варіант №1:" . "\n";
echo luckyTickets(2); // для квитка з 6 цифр
echo "\n" . "\n";

// 2-й варіант
function luckyTickets($k)
{
    if ($k % 2 !== 0) {
        return 'Enter an even number';
    }

    $half_k = $k / 2;
    $max_digit_sum = 9 * $half_k; // максимальна сума для половини квитка
    $array_sum = array_fill(0, $max_digit_sum + 1, 0);

    // рахуємо кількість варіантів для сум перших половин
    for ($i = 0; $i < pow(10, $half_k); $i++) {
        $array_numeral = array_pad(str_split((string)$i), -$half_k, 0);
        $sum = array_sum($array_numeral);
        $array_sum[$sum]++;
    }

    $count_lucky_tickets = 0;
    
    // рахуємо кількість "щасливих" квитків
    foreach ($array_sum as $value) {
        $count_lucky_tickets += $value * $value;
    }

    return $count_lucky_tickets;
}

echo "Задача №7. Варіант №2:" . "\n";
echo luckyTickets(6); // для квитка з 6 цифр
?>