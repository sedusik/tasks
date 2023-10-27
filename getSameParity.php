

/*
Реализуйте функцию getSameParity, которая принимает на вход список и возвращает новый, состоящий из элементов, у которых такая же четность, как и у первого элемента входного списка.

<?php

getSameParity([]); // []
getSameParity([-1, 0, 1, -3, 10, -2]); // [-1, 1, -3]


*/

//Мое решение:

<?php

function getSameParity($list)
{

    $result = array_filter($list, function ($curr) use ($list) {
        $parityFirstNum = $list[0] % 2;
        $parityCurr = $curr % 2;

        return (abs($parityFirstNum) === abs($parityCurr));
    });
    return array_values($result);
}

//Репшение учмтеля:

function getSameParity(array $numbers)
{
    if (empty($numbers)) {
        return $numbers;
    }

    [$firstNum] = $numbers;
    $parity = abs($firstNum) % 2;
    $filtered = array_filter($numbers, function ($num) use ($parity) {
        return (abs($num) % 2) === $parity;
    });

    return array_values($filtered);
}