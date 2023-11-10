

/*
Реализуйте класс Circle для описания кругов. У круга есть только одно свойство - его радиус. Реализуйте методы getArea и getCircumference, которые возвращают площадь и периметр круга соответственно.

<?php

$circle = new Circle(10);
Подсказки
Площадь круга: πr2
Длина окружности: 2*πR
*/



<?php

namespace App;

class Circle
{
    public $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function getArea()
    {
        return M_PI * ($this->getRadius() ** 2);
    }
    public function getCircumference()
    {
        return 2 * M_PI * $this->getRadius();
    }
}