

/*
Реализуйте функцию addDigits(), которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.

Для числа 38 процесс будет выглядеть так:

// 38 состоит из двух цифр, складываем их
3 + 8 = 11 // результат сложения тоже состоит из двух цифр, поэтому складываем их
1 + 1 = 2 // результат это одна цифра, возвращаем ее
Для числа 919 процесс будет выглядеть так:

9 + 1 + 9 = 19
1 + 9 = 10
1 + 0 = 1
Результат: 1

<?php

addDigits(0); // 0
addDigits(1); // 1
addDigits(9); // 9
addDigits(10); // 1
addDigits(38); // 2

*/

//Мое решение:

<?php

function addDigits($num)
{
    if ($num < 10) {
        return $num;
    }
    $num = strval($num);
    $size = strlen($num);
    $result = 0;
    for ($i = 0; $i < $size; $i++) {
        $result = $result + $num[$i];
    }
    return addDigits($result);
}

//Решение учителя:

function sumDigits(int $number)
{
    $str = (string) $number;
    $result = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        $result += (int) $str[$i];
    }
    return $result;
}

function isOneDigitNumber(int $number)
{
    return $number < 10;
}

function addDigits($num)
{
    $result = $num;
    while (!isOneDigitNumber($result)) {
        $result = sumDigits($result);
    }

    return $result;
}