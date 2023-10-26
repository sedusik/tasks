

/*
Реализуйте функцию fromPairs, которая принимает на вход массив, состоящий из массивов-пар, и возвращает ассоциативный массив, полученный из этих пар.

Примечания
Если при конструировании объекта попадаются совпадающие ключи, то берётся значение из последнего массива-пары:
<?php

fromPairs([['cat', 5], ['dog', 6], ['cat', 11]]);
// ['cat' => 11, 'dog' => 6]
Примеры
<?php

fromPairs([['fred', 30], ['barney', 40]]);
// ['fred' => 30, 'barney' => 40]

*/

//Мое решение

<?php

namespace App\AssociativeArrays;

function fromPairs($array)
{
    $result = [];
    foreach ($array as [$key, $value]) {
        $result[$key] = $value;
    }
    return $result;
}