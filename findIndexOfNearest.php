

/*
Реализуйте функцию findIndexOfNearest, которая принимает на вход массив чисел и искомое число. Задача функции — найти в массиве ближайшее число к искомому и вернуть его индекс в массиве.

Если в массиве содержится несколько чисел, одновременно являющихся ближайшими к искомому числу, то возвращается наименьший из индексов ближайших чисел.

Примеры
<?php

findIndexOfNearest([], 2); // null
findIndexOfNearest([15, 10, 3, 4], 0); // 2


*/

//Мое решение:

<?php

function findIndexOfNearest($array, $num)
{
    if (empty($array)) {
        return null;
    }
    $result = array_reduce($array, function ($acc, $user) use ($num, $array) {
        return $acc = abs($num - $acc) <= abs($num - $user) ? $acc : $user;
    }, $array[0]);
    return (array_search($result, $array));
}

//Решение учителя:

function findIndexOfNearest(array $items, $value)
{
    if (empty($items)) {
        return null;
    }

    return array_reduce(
        array_keys($items),
        fn($acc, $i) => abs($items[$i] - $value) < abs($items[$acc] - $value) ? $i : $acc,
        0
    );
}