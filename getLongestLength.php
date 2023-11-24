

/*
Реализуйте функцию getLongestLength() принимающую на вход строку и возвращающую длину максимальной последовательности из неповторяющихся символов. Подстрока может состоять из одного символа. Например в строке qweqrty, можно выделить следующие подстроки: qwe, weqrty. Самой длинной будет weqrty.

Примеры
<?php
 
getLongestLength('abcdeef'); // 5
getLongestLength('jabjcdel'); // 7
getLongestLength(''); // 0

*/

//Мое решение 1:

<?php

namespace App\Solution;

function getLongestLength(string $str)
{
    $sequence = [];
    $maxLenght = 0;

    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i];
        $index = array_search($char, $sequence);
        $sequence[] = $char;

        if ($index !== false) {
            $sequence = array_slice($sequence, $index + 1);
        }
        $lenghtSequence = count($sequence);
        if ($lenghtSequence > $maxLenght) {
            $maxLenght = $lenghtSequence;
        }
    }
    return $maxLenght;
}

//Мое решение 2:

function getLongestLength($string)
{
    if ($string === '') {
        return 0;
    }
    $maxLength1 = 0;
    $maxLength2 = 0;
    $result = [];
    $length = strlen($string);

    for ($i = 0; $i < $length; $i++) {
        $symbol = $string[$i];
        if (in_array($symbol, $result)) {
            $maxLength1 = max($maxLength1, count($result));
            $result = [];
        }
        $result[] = $symbol;
    }
    $reverseString = strrev($string);
    for ($i = 0; $i < $length; $i++) {
        $symbol = $reverseString[$i];
        if (in_array($symbol, $result)) {
            $maxLength2 = max($maxLength2, count($result));
            $result = [];
        }
        $result[] = $symbol;
    }
    return max($maxLength1, $maxLength2);
}