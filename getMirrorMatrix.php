

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

function getMirrorMatrix($matrix)
{
    foreach ($matrix as &$value) {
        $size = count($value);
        $averageIndex = $size / 2;
        $lastIndex = $size - 1;
        for ($i = $lastIndex; $i >= $averageIndex; $i--) {
            $value[$i] = $value[$size - $i - 1];
        }
    }
    return $matrix;
}

//Решение учителя:

function getMirrorMatrix(array $matrix): array
{
    $size = count($matrix);
    $middle = $size / 2;
    $mirroredMatrix = [];

    foreach ($matrix as $row) {
        $leftHalf = array_slice($row, 0, $middle);
        $mirroredMatrix[] = [...$leftHalf, ...array_reverse($leftHalf)];
    }

    return $mirroredMatrix;
}