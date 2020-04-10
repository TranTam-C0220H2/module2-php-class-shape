<?php


class Shape
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
    public function show()
    {
        return 'Day la ' . $this->name;
    }
}
