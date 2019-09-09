<?php
include_once ('Circle.php');
include_once ('Cylinder.php');
$circle = new Circle(20);
$cylinder = new Cylinder(20,30);
echo "Ban kinh cua hinh tron la: ".$circle->getRadius();
echo "Dien tich hinh tron la: ".$circle->getArea();
echo "<br>";
echo "Chu vi hinh tron la: ".$circle->getPer();
echo "<br>";
echo "Ban kinh hinh tru la: ".$cylinder->getRadius()." Va chieu cao la: ".$cylinder->getHeight();
echo "Dien tich hinh tru la: ". $cylinder->getArea();
echo "<br>";
echo  "The tich hinh tru la: ".$cylinder->getVolume();