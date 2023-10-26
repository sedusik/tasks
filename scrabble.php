

/*
Реализуйте функцию scrabble, которая принимает на вход два параметра: набор символов (строку) и слово, и проверяет, можно ли из переданного набора составить это слово. В результате вызова функция возвращает true или false.

При проверке учитывается количество символов, нужных для составления слова, и не учитывается их регистр.

Примеры
<?php

use function App\Solution\scrabble;

scrabble('rkqodlw', 'world'); // true
scrabble('avj', 'java'); // false
scrabble('avjafff', 'java'); // true
scrabble('', 'hexlet'); // false
scrabble('scriptingjava', 'JavaScript'); // true


*/

//Мое решение:

namespace App\Solution;

function scrabble($string, $word)
{
    $arrayWord = str_split(strtolower($word));
    $arrayString = str_split(strtolower($string));
    for ($i = 0; $i < strlen($word); $i++) {
        $curr = $arrayWord[$i];
        if (in_array($curr, $arrayString)) {
            $keyInString = array_search($curr, $arrayString);
            unset($arrayString[$keyInString]);
        } else {
            return false;
        }
    }
    return true;
}

//Решение учителя:

function countByChars($str)
{
    $symbols = str_split($str);
    return array_count_values($symbols);
}

function scrabble($str, $word)
{
    $charsStr = countByChars($str);
    $charsWord = countByChars(mb_strtolower($word));
    foreach ($charsWord as $char => $count) {
        if (!array_key_exists($char, $charsStr)) {
            return false;
        }
        if ($charsStr[$char] < $count) {
            return false;
        }
    }
    return true;
}