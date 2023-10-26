

/*
Чанкованием (от англ. Chunk — ячейка, кусок, осколок) в программировании называют разбиение коллекции (массива) на несколько более мелких коллекций. Например, разобьём массив на чанки, так чтобы в каждом чанке было не более двух элементов: ['a', 'b', 'c', 'd'] -> [['a', 'b'], ['c', 'd']].

src\Arrays.php
Реализуйте функцию getChunked, которая принимает на вход массив и число, задающее размер чанка (куска). Функция должна вернуть массив, состоящий из чанков указанной размерности.

<?php
 
getChunked(['a', 'b', 'c', 'd'], 2);
// → [['a', 'b'], ['c', 'd']]
 
getChunked(['a', 'b', 'c', 'd'], 3);
// → [['a', 'b', 'c'], ['d']]

*/

//Решение:

function getChunked($array, $num)
{
    $result = [];
    for ($i = 0, $lenght = count($array); $i < $lenght; $i = $i + $num) {
        $result[] = array_slice($array, $i, $num);
    }
    return $result;
}