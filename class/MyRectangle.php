<?php
include_once('Shape.php');
class MyRectangle extends Shape{
    public $width;
    public $height;

    public function __construct($name, $width, $height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function calculateArea(){
        return $this->getWidth() * $this->getHeight();
    }

    public function calculatePerimeter(){
        return ($this->getWidth() + $this->getHeight()) * 2;
    }
}
