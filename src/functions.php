<?php

function task1(array $arr, bool $return = false) 
{
    $total = '';
    foreach($arr as $str) {
        $total .= "<p>$str</p>";
    }
    echo $total;
    return $return ? $total : 1;
}

function task2(string $sign, ...$args) 
{
    if (!in_array($sign, ['*','/','-','+','%'])) {
        echo 'Неверное арифметическое действие!';
        return 0;
    }
    $total = 0;
    eval('$total = ' . implode($sign, $args) . ';');
    echo 'Результат: ' . implode(' ' . $sign . ' ', $args) . " = $total";
}

function task3(int $num_1, int $num_2) 
{
    ?>
    <table border="1" style="text-align: center;">
    <?php
    for ($i = 1; $i < $num_1 + 1; $i++) {
        echo '<tr>';
        for ($k = 1; $k < $num_2 + 1; $k++) {
            echo '<td>'.($k * $i).'</td>';
        }
        echo '</tr>';
    };
    ?>
    </table>
    <?php
}

function task4() 
{
    echo date('d.m.Y H:i', strtotime('31.12.2016 23:59')) . '</br>';
    echo strtotime('24.02.2016 00:00:00') . '</br>';
}

function task5() 
{
    $str_1 = 'Карл у Клары украл Кораллы';
    $str_2 = 'Две бутылки лимонада';
    echo $str_1 =  str_replace('К', '', $str_1) . '</br>';
    echo $str_1 =  str_replace('Две','Три', $str_2) . '</br>';
}

function task6() 
{
    file_put_contents('file.txt', 'Hello again!');
}

function task7($file_name) 
{
    $fp = fopen($file_name, 'r');
    echo fgets($fp, 1024);

    fclose($fp);
}
?>