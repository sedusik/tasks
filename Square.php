

/*
src/Square.php
Реализуйте класс Square для описания квадратов. У квадрата есть только одно свойство — сторона. Реализуйте метод getSide, возвращающий значение стороны.

<?php

$square = new Square(10);
$square->getSide(); // 10
src/SquaresGenerator.php
Реализуйте класс SquaresGenerator со статическим методом generate, принимающим два параметра: сторону и количество экземпляров квадрата (по умолчанию 5 штук), которые нужно создать. Функция должна вернуть массив из квадратов.

<?php

$squares = SquaresGenerator::generate(3, 2);
// [new Square(3), new Square(3)];

*/



<?php

namespace App;

class Square
{
    public $side;

    public function __construct($side)
    {
        $this->side = $side;
    }

    public function getSide()
    {
        return $this->side;
    }
}

namespace App;


class SquaresGenerator
{
    public static function generate($side, $count = 5)
    {
        $squares = array();
        for ($i = 0; $i < $count; $i++) {
            $squares[] = new Square($side);
        }
        return $squares;
    }
}