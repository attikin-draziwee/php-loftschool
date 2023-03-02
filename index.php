<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Домашнее задание</title>
    <style>
        td {
            padding: .3em;
        }
        tr > td:first-child {
            font-weight: bold;
        }
        tr:first-child > td {
            font-weight: bold;
        }
    </style>
</head>
<body> 
<?php
echo str_repeat('<br/>',2);
// домашнее задание #1
// задание #1
$name = "Никита";
$age = 23;

echo "Меня зовут: $name".'<br/>';
echo "Мне $age лет".'<br/>';
echo "\"!|/'\"\\".'<br/>';

echo str_repeat('<br/>',2);
// задание #2
const TOTAL_ART = 80;
const MARKED_ART = 23;
const PENCILED_ART = 40;
const PAINTED_ART = TOTAL_ART - MARKED_ART - PENCILED_ART;

echo PAINTED_ART . " рисунков были выполнены красками.".'<br/>';

echo str_repeat('<br/>',2);
// задание #3

$age = 66;
if ($age >= 18 && $age <= 65) {
    echo "Вам еще работать и работать".'<br/>';
} elseif ($age > 65) {
    echo "Вам пора на пенсию".'<br/>';
} elseif ($age >= 1 && $age <= 17) {
    echo "Вам еще рано работать".'<br/>';
} else {
    echo "Неизвестный возраст".'<br/>';
}

echo str_repeat('<br/>',2);
// задание #4

$day = 5;
switch($day) {
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Это рабочий день".'</br>';
        break;
    case 6:
    case 7:
        echo "Это выходной день".'</br>';
        break;
    default:
        echo "Неизвестный день".'</br>';
};

echo str_repeat('<br/>',2);
// задание #5

$cars = [
    'bmw' => [
        'model' => 'X5',
        'speed' => 120,
        'doors' => 5,
        'year' => '2015'
    ],
    'toyota' => [
        'model' => 'z22',
        'speed' => 60,
        'doors' => 4,
        'year' => '2012'
    ],
    'opel' => [
        'model' => 'moz',
        'speed' => 90,
        'doors' => 2,
        'year' => '2009'
    ],
];

foreach($cars as $key => $value) {
    echo 'CAR ' . $key . '</br>';
    print(implode(' ', $value));
    echo '</br>';
};

echo str_repeat('<br/>',2);
?>

<table border="1" style="text-align: center;">
    <caption>Таблица умножения</caption>
<?php
// задание #6
for ($i = 1; $i < 11; $i++) {
    if ($i == 1) {
        echo '<thead><tr>';
        for ($k = 1; $k < 11; $k++) {
            echo '<th>'.even_odd($k,$i).'</th>';
        }
        echo '</tr></thead>';
        continue;
    }
    echo '<tr>';
    for ($k = 1; $k < 11; $k++) {
        echo '<td>'.even_odd($k,$i).'</td>';
    }
    echo '</tr>';
}
?>
</table>

<?php 
function even_odd($num_1,$num_2)
{
    if ($num_1 % 2 == 0 && $num_2 % 2 == 0) {
        return '('.$num_1*$num_2.')';
    } elseif ($num_1 % 2 != 0 && $num_2 % 2 != 0) {
        return '['.$num_1*$num_2.']';
    } else {
        return $num_1*$num_2;
    }
}

echo str_repeat('<br/>',2);

// Домашнее задание 2
require('src/functions.php');

// Задание 1 
$arr_str = ['Привет, меня зовут', 'Совершенный рот', 'Я сам - Антон', 'Сейчас','Я','Мастерская','ъхъх'];
$all_str = task1($arr_str, true);
var_dump($all_str);
echo str_repeat('<br/>',2);

// Задание 2
task2('*', 5,5,3);
echo str_repeat('<br/>',2);

// Задание 3
task3(3, 7);
echo str_repeat('<br/>',2);

// Задание 4
task4();
echo str_repeat('<br/>',2);

// Задание 5
task5();
echo str_repeat('<br/>',2);

// Задание 6
task6();
task7('file.txt');

echo str_repeat('<br/>',2);
?>
</body>
</html>