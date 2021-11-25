<?php 

// задание1
// С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка. 
$a = 0;
while ($a<=100){
    if($a%3===0){
        echo $a .PHP_EOL;
        $a++;
    } else $a++;
    
}

// задание2
// С помощью цикла do…while написать функцию для вывода чисел от 0 до 10, чтобы результат выглядел так:

// 0 – ноль.
// 1 – нечетное число.
// 2 – четное число.
// 3 – нечетное число.
// …
// 10 – четное число.
$b = 0;
do {
    if ($b === 0){
        echo $b . '-ноль' .PHP_EOL;
        $b++;
    } else if ($b%2==0) {
        echo $b . '-четное число' .PHP_EOL;
        $b++;
    } else {
        echo $b . '-нечетное число' .PHP_EOL;
        $b++;
    }
} while ($b <= 10);


// задание 3

// Объявить массив, в котором в качестве ключей будут использоваться названия областей, 
// а в качестве значений – массивы с названиями городов из соответствующей области. 
// Вывести в цикле значения массива, чтобы результат был таким:

// Московская область:
// Москва, Зеленоград, Клин
// Ленинградская область:
// Санкт-Петербург, Всеволожск, Павловск, Кронштадт
// Рязанская область … (названия городов можно найти на maps.yandex.ru)

// $regions = [
//     'Московская область' => ['Москва', 'Зеленоград', 'Klin'],
//     'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Kronshtadt'],
//     'Рязанская область' => ['Рязань', 'Шилово', 'Ряжск', 'KСасово']
// ];
$regions = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Рязань', 'Шилово', 'Ряжск', 'Сасово']
];

foreach($regions as $region => $value){
    echo $region .':' .PHP_EOL ;
    foreach($value as $city){
        echo $city .PHP_EOL;
    }
};

// задание 4 
// Объявить массив, индексами которого являются буквы русского языка, а значениями – соответствующие латинские буквосочетания 
// (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).

// Написать функцию транслитерации строк. 
$translit_table = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'h',
    'ц' => 'c',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'sch',
    'ъ' => '',
    'ы' => 'y',
    'ь' => '',
    'э' => 'e',
    'ю' => 'yu',
    'я' => 'ya',
];
function translit($string, $translit_table){

    $string = strtr($string, $translit_table);
    return $string;
}
echo PHP_EOL;
echo translit('космонавтика', $translit_table);


// задание 5
// Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.

function trans_lit($string){

    $string = strtr($string, ' ', '_');
    return $string;
}
echo PHP_EOL;
echo trans_lit('массивы называются ассоциативными и являются одной из отличительных черт язык');

// задание 6
// В имеющемся шаблоне сайта заменить статичное меню (ul – li) на генерируемое через PHP. 
// Необходимо представить пункты меню как элементы массива и вывести их циклом. 
// Подумать, как можно реализовать меню с вложенными подменю? Попробовать его реализовать.

    $h1 = 'h1';
    $title = 'title';
    $year = date('Y');
    $text1 = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Praesentium, voluptatum.';
    $text2 = 'массивы называются ассоциативными и являются одной из отличительных черт язык';
    $text3 = 'ipsum dolor sit, amet consectetur.';
    $menu = [
        '<ul>' => ["<li>$text1</li>", "<li>$text2</li>", "<li>$text3</li>"],
        '<ul>' => ["<li>$text1</li>", "<li>$text2</li>", "<li>$text3</li>"],
        '<ul>' => ["<li>$text1</li>", "<li>$text2</li>", "<li>$text3</li>"]
    ];
?>
<html>
<head>
    <title><?php echo $title ?></title>
</head>
<body>
    <h1><?php echo $h1; ?></h1>
    <div class="menu"><?php 
        foreach ($menu as $list => $item){
            echo $list .'</ul>';
            foreach ($item as $element){
                echo $element .'<br>';
            }
        }
    ?></div>
    <span><?php echo $year; ?></span>
</body>
</html>


<?php
// задание 7
// *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла. Выглядеть должно так:

// for (…){ // здесь пусто} 
echo PHP_EOL;
for ($i=0; $i<10; print $i, $i++);

// задание 8
// *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К». 
echo PHP_EOL;
foreach($regions as $region => $value){
    foreach($value as $city){
        if ($city[0]==='К' || $city[0]==='к'){
            echo $city;
        }  
    }
};


echo $regions['Московская область'][1]; // зеленоград
// у меня не отображаются русские символы при обращении к строке как к массиву по индексу символа, 
echo $regions['Московская область'][1][0]; //выводит ? вместо 'З', если переписать на латиницу все работает нормально


// задание 9
// *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, 
// производит транслитерацию и замену пробелов на подчеркивания 
// (аналогичная задача решается при конструировании url-адресов на основе названия статьи в блогах). 

function translit_full ($string){
    $translit_table = [
        'а' => 'a',
        'б' => 'b',
        'в' => 'v',
        'г' => 'g',
        'д' => 'd',
        'е' => 'e',
        'ё' => 'yo',
        'ж' => 'zh',
        'з' => 'z',
        'и' => 'i',
        'й' => 'j',
        'к' => 'k',
        'л' => 'l',
        'м' => 'm',
        'н' => 'n',
        'о' => 'o',
        'п' => 'p',
        'р' => 'r',
        'с' => 's',
        'т' => 't',
        'у' => 'u',
        'ф' => 'f',
        'х' => 'h',
        'ц' => 'c',
        'ч' => 'ch',
        'ш' => 'sh',
        'щ' => 'sch',
        'ъ' => '',
        'ы' => 'y',
        'ь' => '',
        'э' => 'e',
        'ю' => 'yu',
        'я' => 'ya',
        ' ' => '_',
        ',' => ''
    ];

    $string = strtr($string, $translit_table);
    return $string;
}

echo translit_full('Обращение к несуществующему элементу массива приведёт к некритической ошибке');