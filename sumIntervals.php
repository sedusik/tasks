

/*
Реализуйте функцию sumIntervals, которая принимает на вход массив интервалов и возвращает сумму всех длин интервалов. В данной задаче используются только интервалы целых чисел от -100 до 100 , которые представлены в виде массива. Первое значение интервала всегда будет меньше, чем второе значение. Например, длина интервала [-100, 0] равна 100, а длина интервала [5, 5] равна 0. Пересекающиеся интервалы должны учитываться только один раз.

Примеры
<?php

sumIntervals([[5, 5]]); // 0

sumIntervals([[-100, 0]]); // 100

sumIntervals([
   [1, 2],
   [11, 12]
]); // 2

sumIntervals([
   [2, 7],
   [6, 6]
]); // 5

sumIntervals([
   [1, 9],
   [7, 12],
   [3, 4]
]); // 11

sumIntervals([
   [1, 5],
   [-10, 19],
   [1, 7],
   [16, 100],
   [5, 11]
]); // 110

*/

//Мое решение:

<?php

function sumIntervals($arrayOfIntervals)
{
    $result = [];
    foreach ($arrayOfIntervals as $item) {
        for ($i = $item[0]; $i < $item[1]; $i++) {
            $result[] = $i;
        }
    }
    $sum = count(array_unique($result));
    return $sum;
}

//Решение учителя:

function sumIntervals($intervals)
{
    $values = [];
    foreach ($intervals as [$start, $end]) {
        for ($i = $start; $i < $end; $i++) {
            $values[$i] = 1;
        }
    }
    return array_sum($values);
}

function sumIntervals($intervals)
{
    $values = [];
    foreach ($intervals as [$start, $end]) {
        for ($i = $start; $i < $end; $i++) {
            $values[] = $i;
        }
    }
    $uniqValues = array_unique($values);
    return count($uniqValues);
}