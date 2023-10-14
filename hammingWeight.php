

/*
Вес Хэмминга это количество единиц в двоичном представлении числа.

src/Solution.php
Реализуйте функцию hammingWeight(), которая считает вес Хэмминга.

<?php

hammingWeight(0);   // 0
hammingWeight(4);   // 1
hammingWeight(101); // 4



*/

//Мое решение:

<?php

function hammingWeight($num)
{
    $binNum = decbin($num);
    $result = 0;
    for ($i = 0; $i < strlen($binNum); $i++) {
        if ($binNum[$i] == 1) {
            $result = $result + 1;
        }
    }
    return $result;
}

//Решение учителя:

function hammingWeight(int $num)
{
    $weight = 0;
    $digits = str_split(decbin($num));
    foreach ($digits as $value) {
        if ($value === '1') {
            $weight += 1;
        }
    }

    return $weight;
}