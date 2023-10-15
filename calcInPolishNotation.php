

/*
В данном упражнении необходимо реализовать стековую машину, то есть алгоритм, проводящий вычисления по обратной польской записи.

Обратная польская нотация или постфиксная нотация — форма записи математических и логических выражений, в которой операнды расположены перед знаками операций. Выражение читается слева направо. Когда в выражении встречается знак операции, выполняется соответствующая операция над двумя ближайшими операндами, находящимися слева от знака операции. Результат операции заменяет в выражении последовательность её операндов и знак, после чего выражение вычисляется дальше по тому же правилу. Таким образом, результатом вычисления всего выражения становится результат последней вычисленной операции.

Например, выражение (1 + 2) * 4 + 3 в постфиксной нотации будет выглядеть так: 1 2 + 4 * 3 +, а результат вычисления: 15. Другой пример - выражение: 7 - 2 * 3, в постфиксной нотации: 7 2 3 * -, результат: 1.

src\Arrays.php
Реализуйте функцию calcInPolishNotation, которая принимает массив, каждый элемент которого содержит число или знак операции (+, -, *, /). Функция должна вернуть результат вычисления по обратной польской записи. Если в какой-то момент происходит деление на ноль, функция должна вернуть значение null.

<?php

calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']);
// → 15

calcInPolishNotation([7, 2, 3, '*', '-']);
// → 1


*/

//Мое решение:

<?php

function calcInPolishNotation($array)
{
    $result = [];
    $symbols = ['+','-','/','*'];
    for ($i = 0; $i < count($array); $i++) {
        if (!in_array($array[$i], $symbols)) {
            $result[] = $array[$i];
        } elseif (in_array($array[$i], $symbols)) {
            if ($array[$i] == '+') {
                $a = $result[count($result) - 2] + $result[count($result) - 1];
                array_splice($result, -2, 2);
                $result[] = $a;
            } elseif ($array[$i] == '-') {
                $a = $result[count($result) - 2] - $result[count($result) - 1];
                array_splice($result, -2, 2);
                $result[] = $a;
            } elseif ($array[$i] == '*') {
                $a = $result[count($result) - 2] * $result[count($result) - 1];
                array_splice($result, -2, 2);
                $result[] = $a;
            } elseif ($array[$i] == '/') {
                if ($result[count($result) - 1] == 0) {
                    return null;
                }
                $a = $result[count($result) - 2] / $result[count($result) - 1];
                array_splice($result, -2, 2);
                $result[] = $a;
            }
        }
    }
    return end($result);
}

//Решение учителя:

function calcInPolishNotation(array $array)
{
    $stack = [];
    $operators = ['*', '/', '+', '-'];
    foreach ($array as $value) {
        if (!in_array($value, $operators)) {
            array_push($stack, $value);
            continue;
        }

        $b = array_pop($stack);
        $a = array_pop($stack);
        switch ($value) {
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $b === 0 ? null : $a / $b;
                break;
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
        }

        if ($result === null) {
            return $result;
        }

        array_push($stack, $result);
    }

    return array_pop($stack);
}