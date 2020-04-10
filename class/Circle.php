<?php
include_once('Shape.php');

class Circle extends Shape
{
    protected $radius;
    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function calculatePerimeter() {
        return 2*$this->getRadius()*M_PI;
    }
    public function calculateArea() {
        return $this->getRadius()*$this->getRadius()*M_PI;
    }
}
