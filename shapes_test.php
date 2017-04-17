<?php 

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(22,1);
echo $rectangle->area() . PHP_EOL;

$rectangle = new Rectangle(1,3);
echo $rectangle->perimeter() . PHP_EOL;

$square = new Square(2);
echo $square->area() . PHP_EOL;

$square = new Square(3);
echo $square->perimeter() . PHP_EOL;



?>
