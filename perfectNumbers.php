

/*
Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.

<?php

isPerfect(6); // true
Совершенное число — это положительное целое число, равное сумме его положительных делителей (не считая само число). Например, 6 — совершенное число, потому что 6 = 1 + 2 + 3.
*/


//Мое решение:

<?php

function isPerfect($number)
{
    if ($number <= 0) {
        return false;
    }
    if (!is_int($number)) {
        return false;
    }
    $result = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) {
            $result = $result + $i;
        }
    }
    return ($number === $result);
}

//Решение учителя:

function isPerfect($num)
{
    if ($num === 0) {
        return false;
    }

    $upperBorder = $num / 2;
    $sum = 0;
    for ($divisor = 1; $divisor <= $upperBorder; $divisor++) {
        if ($num % $divisor === 0) {
            $sum += $divisor;
        }
    }
    return $sum === $num;
}