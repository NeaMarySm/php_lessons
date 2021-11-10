<?php
// задание1 
// Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. 
// Затем написать скрипт, который работает по следующему принципу:

// если $a и $b положительные, вывести их разность;
// если $а и $b отрицательные, вывести их произведение;
// если $а и $b разных знаков, вывести их сумму;

$a = -6;
$b = 14;

if ($a >=0 && $b >=0) {
    echo $a - $b;
}
else if ($a<0 && $b <0) {
    echo $a * $b;
}
else echo $a + $b ;
 
// задание 2
// Присвоить переменной $а значение в промежутке [0..15]. 
// С помощью оператора switch организовать вывод чисел от $a до 15.

echo PHP_EOL;
$a = 6;
switch($a){
    case 0 : 
        echo '0 1 2 3 4 5 6 7 8 9 10 11 12 13 14 15';
    break;
    case 1 : 
        echo '1 2 3 4 5 6 7 8 9 10 11 12 13 14 15';
    break;
    case 2 : 
        echo '2 3 4 5 6 7 8 9 10 11 12 13 14 15';
    break;
    case 3 : 
        echo '3 4 5 6 7 8 9 10 11 12 13 14 15';
    break;
    case 4 : 
        echo '4 5 6 7 8 9 10 11 12 13 14 15';
    break;
    case 5 : 
        echo '5 6 7 8 9 10 11 12 13 14 15';
    break;
    case 6 : 
        echo '6 7 8 9 10 11 12 13 14 15';
    break;
    case 7 : 
        echo '7 8 9 10 11 12 13 14 15';
    break;
    case 8 : 
        echo '8 9 10 11 12 13 14 15';
    break;
    case 9 : 
        echo '9 10 11 12 13 14 15';
    break;
    case 10 : 
        echo '10 11 12 13 14 15';
    break;
    case 11 : 
        echo '11 12 13 14 15';
    break;
    case 12 : 
        echo '12 13 14 15';
    break;
    case 13 : 
        echo '13 14 15';
    break;
    case 14 : 
        echo '14 15';
    break;
    case 15 : 
        echo '15';
    break;
}
// с 'проваливанием'
echo PHP_EOL;
$a = 9;
switch($a){
    case 0 : 
        echo '0';
    case 1 : 
        echo '1';
    case 2 : 
        echo '2';
    case 3 : 
        echo '3';
    case 4 : 
        echo '4';
    case 5 : 
        echo '5';
    case 6 : 
        echo '6';
    case 7 : 
        echo '7';
    case 8 : 
        echo '8';
    case 9 : 
        echo '9';
    case 10 : 
        echo '10';
    case 11 : 
        echo '11';
    case 12 : 
        echo '12';
    case 13 : 
        echo '13';
    case 14 : 
        echo '14';
    case 15 : 
        echo '15';

}


// задание 3
// Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. 
// Обязательно использовать оператор return.

function sum ($arg1, $arg2){
    return $arg1 + $arg2;
}
function subtr ($arg1, $arg2){
    return $arg1 - $arg2;
}
function mult ($arg1, $arg2){
    return $arg1 * $arg2;
}
function division ($arg1, $arg2){
    return $arg1 / $arg2;
}
echo PHP_EOL;
echo sum(7,15);
echo PHP_EOL;
echo subtr(11,5);
echo PHP_EOL;
echo mult(3,5);
echo PHP_EOL;
echo division(66,11);

// задание 4
// Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), 
// где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. 
// В зависимости от переданного значения операции выполнить одну из арифметических операций 
// (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).

function mathOperation($arg1, $arg2, $operation) {
    switch($operation){
        case 'сумма':
            return sum($arg1, $arg2);
        break;
        case 'вычитание':
            return subtr($arg1, $arg2);
        break;
        case 'умножение':
            return mult($arg1, $arg2);
        break;
        case 'деление':
            return division($arg1, $arg2);
        break;
    }
}
echo PHP_EOL;
echo mathOperation(3,4,'деление');

// задание 6
// *С помощью рекурсии организовать функцию возведения числа в степень. 
// Формат: function power($val, $pow), где $val – заданное число, $pow – степень.

function power($val, $pow) {
    if ($pow === 0) return 1;
    if($pow != 1) {
    return $val * power($val, $pow - 1);
    }
    else return $val;
    
}
echo PHP_EOL;
echo power(5,3);


// задание 7
// Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, 
//например:
// 22 часа 15 минут
// 21 час 43 минуты

function my_time (){
    $hour_now = date('H');
    $min_now = date('i');
    echo PHP_EOL;
    var_dump($hour_now);
    var_dump($min_now);

    switch($hour_now ){
        case 1:
        case 21:
            $hour_str = 'час';
            break;
        case 2:
        case 3:
        case 4:
        case 22: 
        case 23:
            $hour_str = 'часа';
            break;
        default: $hour_str = 'часов';
    }
    switch($min_now ){
        case 1:
        case 2:
        case 3:
        case 4:
        case 21:
        case 31:    
        case 41:
        case 51:    
            $min_str = 'минута';
            break;
        case 22:
        case 23:
        case 24:
        case 32:
        case 33:
        case 34:    
        case 42:
        case 43: 
        case 44:
        case 52:
        case 53:
        case 54:
            $min_str = 'минуты';
            break;
        default: $min_str = 'минут';
    }
    
    echo  $hour_now . $hour_str . $min_now . $min_str ;

}
echo PHP_EOL;
echo my_time();

// 'час' 1 21 
// 'часа' 2 3 4 22 23
// 'часов' 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 0
// 'минут' 0 5 6 7 8 9 10 11 12 13 14 15 16 17 18 19 20 25 26 27 28 29 30 35 36 37 38 39 40 45 46 47 48 49 50 55 56 57 58 59 60
// 'минута' 1 2 3 4 21 31 41 51 
// 'минуты' 22 23 24 32 33 34 42 43 44 52 53 54 