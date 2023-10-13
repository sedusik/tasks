

/*
ДНК и РНК это последовательности нуклеотидов.

Четыре нуклеотида в ДНК это аденин (A), цитозин (C), гуанин (G) и тимин (T).

Четыре нуклеотида в РНК это аденин (A), цитозин (C), гуанин (G) и урацил (U).

Цепь РНК составляется на основе цепи ДНК последовательной заменой каждого нуклеотида:

G -> C
C -> G
T -> A
A -> U
src/Solution.php
Напишите функцию toRna, которая принимает на вход цепь ДНК и возвращает соответствующую цепь РНК (совершает транскрипцию РНК).


toRna('ACGTGGTCTTAA');
// → 'UGCACCAGAAUU'


*/

//Мое решение:

<?php

function toRna($dna)
{
    $result = '';
    $dnaArr = str_split($dna);
    foreach ($dnaArr as $key) {
        if ($key === 'G') {
            $result = $result . 'C';
        } elseif ($key === 'C') {
            $result = $result . 'G';
        } elseif ($key === 'T') {
            $result = $result . 'A';
        } elseif ($key === 'A') {
            $result = $result . 'U';
        }
    }
    return $result;
}

//Решение учителя:

function toRna($dna)
{
    $map = [
        'G' => 'C',
        'C' => 'G',
        'T' => 'A',
        'A' => 'U',
    ];

    $length = strlen($dna);

    $result = [];
    for ($i = 0; $i < $length; $i += 1) {
        $result[] = $map[$dna[$i]];
    }

    return implode('', $result);
}