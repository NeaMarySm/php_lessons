<?php

$value_1 = $_POST['first_value'];
$value_2 = $_POST['second_value'];
$operation = $_POST['operation'];

if(!is_numeric($value_1) || !is_numeric($value_2)){
    $result = 'Вы ввели недопустимое значение';
}
 else {
    $result = mathOperation($value_1, $value_2, $operation);   
}

function mathOperation($arg1, $arg2, $operation) {
    switch($operation){
        case 'sum':
            return sum($arg1, $arg2);
        break;
        case 'sub':
            return subtr($arg1, $arg2);
        break;
        case 'mult':
            return mult($arg1, $arg2);
        break;
        case 'div':
            return division($arg1, $arg2);
        break;
    }
}

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
    if($arg2 == 0){
        return 'На ноль делить нельзя';
    } else {
        return $arg1 / $arg2;
    }  
}
