

/*
Реализуйте функцию binarySum, которая принимает на вход два бинарных числа (в виде строк) и возвращает их сумму. Результат (вычисленная сумма) также должен быть бинарным числом в виде строки.

Посмотрите примеры работы функции:

<?php

binarySum('10', '1'); // 11
binarySum('1101', '101'); // 10010

*/



<?php

function binarySum($num1, $num2)
{
    $decNum1 = bindec($num1);
    $decNum2 = bindec($num2);
    $sum = $decNum1 + $decNum2;
    $binSum = decbin($sum);
    return $binSum;
}