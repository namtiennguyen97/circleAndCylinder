<?php


class Circle
{
public $radius;
//method

public function __construct($radius)
{
    $this->radius= $radius;
}

    public function getRadius()
    {
        return $this->radius;
    }


    //good one!
    public function getArea(){
        return ($this->radius * $this->radius)* 3.14;
    }
    public function getPer(){
return ($this->radius + $this->radius)*2;
    }

}






