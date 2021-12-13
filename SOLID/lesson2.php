//! open closed priniciple
//* OPEN for extension but closed for modification in a particular internal class
//* changing the behavior of the class without modifying the source code  - code rot (extension)

//**  tips = separate the extensible behavior behind an interface 
//** flip the dependency

//! if we validates of types we are likely to break the rules
<?php

interface Shape {
    public function calcArea();
  
}

class AreaCalculator {

    protected $shape;
    public function __construct(Shape $shape)
    {
        $this->shape=$shape;
    }

    public function getArea()
    {
        return $this->shape->calcArea();
    }
}

class Square implements Shape {

    protected $area;
    protected $width;
    protected $height;

    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
        
    }
    public function calcArea()
    {
       return $this->width * $this->height;
    }
}
class Circle implements Shape {

    protected $radius;

    public function __construct($radius)
    {
        $this->radius=$radius;
    }

    public function calcArea()
    {
       return $this->radius * pi();
    }
}

$area= new AreaCalculator(new Circle(10));
var_dump($area->getArea());

?>