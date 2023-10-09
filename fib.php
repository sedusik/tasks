

/*
Реализуйте функцию fib(), находящую положительные числа Фибоначчи. Аргументом функции является порядковый номер числа.

Формула:

f(0) = 0
f(1) = 1
f(n) = f(n-1) + f(n-2)
<?php

fib(3); // 2
fib(5); // 5
fib(10); // 55

*/



<?php

function fib($ordinalNum)
{
    if ($ordinalNum === 0) {
        return $ordinalNum;
    }
    if ($ordinalNum === 1) {
        return $ordinalNum;
    }
    $f1 = 0;
    $f2 = 1;
    for ($i = 2; $i <= $ordinalNum; $i++) {
        $sum = $f1 + $f2;
        $f1 = $f2;
        $f2 = $sum;
    }
    return $sum;
}