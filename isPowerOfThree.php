

/*
Реализуйте функцию isPowerOfThree() которая определяет, является ли переданное число натуральной степенью тройки. Например, число 27 – это третья степень (33), а 81 – четвёртая (34).

<?php

isPowerOfThree(1); // → true (3^0)
isPowerOfThree(3); // → true
isPowerOfThree(4); // → false
isPowerOfThree(9); // → true
*/


//Мое решение
<?php

function isPowerOfThree($num)
{
    if ($num === 0) {
        return false;
    }
    if ($num === 1) {
        return true;
    }

    if ($num % 3 !== 0) {
        return false;
    }

    return isPowerOfThree($num / 3); // рекурсивный вызов функции с проверкой степени тройки
}

//Решение учителя

function isPowerOfThree(int $num)
{
    $current = 1;
    while ($current <= $num) {
        if ($current === $num) {
            return true;
        }
        $current *= 3;
    }

    return false;
}