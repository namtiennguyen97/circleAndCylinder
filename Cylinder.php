<?php

include "Circle.php";
class Cylinder extends Circle
{
    public $height;
public function __construct($radius,$height)
{
    parent::__construct($radius);
    $this->height = $height;
}

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param mixed $height
     */


    /**
     * @return mixed
     */
    public function getRadius()
    {
        return $this->radius;
    }
//thay doi phuong thuc
public function getArea()
{
    return 2* 3.14*$this->radius*($this->radius + $this->height);
}
public function getVolume(){
    return 3.14 * $this->radius * $this->height;
}
}