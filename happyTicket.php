

/*
"Счастливым" называют билет с номером, в котором сумма первой половины цифр равна сумме второй половины цифр. Номера могут быть произвольной длины, с единственным условием, что количество цифр всегда чётно, например: 33 или 2341 и так далее.

Билет с номером 385916 — счастливый, так как 3 + 8 + 5 = 9 + 1 + 6. Билет с номером 231002 не является счастливым, так как 2 + 3 + 1 != 0 + 0 + 2.

src/Ticket.php
Реализуйте функцию isHappy, проверяющую является ли номер счастливым (номер — всегда строка). Функция должна возвращать true, если билет счастливый, или false, если нет.

Примеры использования:
<?php

use function Ticket\isHappy;

isHappy('385916'); // true
isHappy('231002'); // false
isHappy('1222'); // false
isHappy('054702'); // true
isHappy('00'); // true
*/



<?php

function isHappy($ticketNumbers)
{
    $countNumbers = strlen($ticketNumbers);
    $avrIndex = $countNumbers / 2;
    $result1 = 0;
    $result2 = 0;
    for ($i = 0; $i <  $avrIndex; $i++)
    {
        $result1 = intval($ticketNumbers[$i]) + $result1;
    }
    for ($i = $countNumbers - 1; $i >=  $avrIndex; $i--)
    {
        $result2 = intval($ticketNumbers[$i]) + $result2;
    }
    return $result1 === $result2;
}