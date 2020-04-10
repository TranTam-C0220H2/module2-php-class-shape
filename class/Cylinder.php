<?php
include_once('Circle.php');

class Cylinder extends Circle
{
    protected $height;

    public function __construct($name, $radius, $height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function calculateArea()
    {
        return $this->calculatePerimeter() * ($this->getHeight() + $this->getRadius());
    }

    public function calculateVolume()
    {
        return parent::calculateArea() * $this->getHeight();
    }
}
