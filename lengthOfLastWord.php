

/*
Реализуйте функцию lengthOfLastWord, которая возвращает длину последнего слова переданной на вход строки. Словом считается любая последовательность, не содержащая пробелов.

<?php

lengthOfLastWord(''); // 0

lengthOfLastWord('man in BlacK'); // 5

lengthOfLastWord('hello, world!  '); // 6

*/



<?php

function lengthOfLastWord($string)
{
    $trimString = trim($string);
    $array = explode(' ', $trimString);
    $lastWord = end($array);
    $size = strlen($lastWord);
    return $size;