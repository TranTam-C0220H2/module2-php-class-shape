<?php
include_once 'Shape.php';

class Triangle extends Shape
{
    protected $side1;
    protected $side2;
    protected $side3;
    protected $color;

    public function __construct($name)
    {
        parent::__construct($name);
        $this->color = 'den';
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function setSide1($side1)
    {
        $this->side1 = $side1;
    }

    public function setSide2($side2)
    {
        $this->side2 = $side2;
    }

    public function setSide3($side3)
    {
        $this->side3 = $side3;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function getSide1()
    {
        return $this->side1;
    }

    public function getSide2()
    {
        return $this->side2;
    }

    public function getSide3()
    {
        return $this->side3;
    }

    public function getPerimeter()
    {
        return $this->getSide1() + $this->getSide2() + $this->getSide3();
    }

    public function getArea()
    {
        return sqrt($this->getPerimeter() * ($this->getPerimeter() / 2 - $this->getSide1()) * ($this->getPerimeter() / 2 - $this->getSide2()) * ($this->getPerimeter() / 2 - $this->getSide3()) / 2);
    }

    public function toString()
    {
        return $this->getName() . ' mau ' . $this->getColor() . ', co 3 canh lan luot la: ' . $this->getSide1() . ', ' . $this->getSide2() . ', ' . $this->getSide3();
    }
}