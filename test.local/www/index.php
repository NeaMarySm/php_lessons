
<?php

// задание 4

    $h1 = 'h1';
    $title = 'title';
    $year = date('Y');
?>
<html>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $h1; ?></h1>
    <span><?php echo $year; ?></span>
</body>
</html>

 

<?php

// задание 2. примеры из методички
echo 'Hello world!' ;

$name = "GeekBrains user";
echo "Hello, $name!";

$name = "Geek";
echo "Hello, $name!";

define('MY_CONST', 100); // создание константы из методички
echo MY_CONST;

const PI = 3.14; // создание константы как на уроке
echo PI;


$int10 = 42;
$int2 = 0b101010;
$int8 = 052;
$int16 = 0x2A;
echo "<br> Десятеричная система $int10 <br>"; // 42
echo "Двоичная система $int2 <br>"; //42
echo "Восьмеричная система $int8 <br>"; // 42
echo "Шестнадцатеричная система $int16 <br>"; //42

$precise1 = 1.5;
$precise2 = 1.5e4;
$precise3 = 6E-8;
echo "$precise1 | $precise2 | $precise3"; // 1.5 | 15000 | 6.0e-8

$a = 1;
echo "$a"; // заменяется значением
echo '$a'; // выведется как $a


$a = 'Hello,';
$b = 'world';
$c = $a . $b; // конкатенация
echo $c;

$a = 4;
$b = 5;

echo '<br> a=' .$a;
echo '<br> b=' .$b;
echo '<br>' . $a + $b . 'сложение<br>';    // сложение
echo $a * $b . 'умножение<br>'; // умножение
echo $a - $b . 'вычитание<br>'; // вычитание
echo $a % $b . 'остаток от деления<br>'; // остаток от деления
echo $a ** $b . 'возведение в степень<br>'; // возведение в степень
echo $a / $b . 'деление<br>'; // деление

$a += $b;
echo 'a = ' . $a .'<br>'; // 9
$a = 0;
echo $a++;     // 0 Постинкремент
echo ++$a;    // 2 (1+1) Преинкремент
echo $a--; // 2 Постдекремент 
echo $a; // 1
echo --$a; // 0 (2-1-1) предекремент
echo $a; // 0

echo '<br>';
$a = 4;
$b = 5;
var_dump($a == $b);  // false Сравнение по значению
var_dump($a === $b); // false Сравнение по значению и типу
var_dump($a > $b);    // false Больше
var_dump($a < $b);    // true Меньше
var_dump($a <> $b);  // true Не равно
var_dump($a != $b);   // true Не равно
var_dump($a !== $b); // true Не равно без приведения типов
var_dump($a <= $b);  // true Меньше или равно
var_dump($a >= $b);  // false Больше или равно

// задание 3
// объяснить как работает код 
$a = 5;
$b = '05';
var_dump($a == $b);         // Почему true? - сравнение с приведением типов, строка приводится к числу
var_dump((int)'012345');     // Почему 12345? - явное приведение к целочисленному типу integer
var_dump((float)123.0 === (int)123.0); // Почему false? - строгое сравнение без приведения типов
var_dump((int)0 === (int)'hello, world'); // Почему true? - строка без чисел преобразуется в 0

//задание 5. 
//Используя только две переменные, поменяйте их значение местами. 
//Например, если a = 1, b = 2, надо, чтобы получилось: a = 2b = 1, . 
//Дополнительные переменные использовать нельзя.

$a = 7;
$b = 4;
$a += $b; // 11
$b += $a; // 4 + 11
echo 'задание 5';
echo $a; // 11
echo $b; // 15
$a = $b - $a;
echo '<br>' . $a; // 4
$b = $b - $a - $a;
echo '<br>' . $b; // 7
 

