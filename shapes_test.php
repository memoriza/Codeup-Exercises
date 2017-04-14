<?php 

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(20,12);
echo $rectangle->area() . PHP_EOL;

$rectangle = new Rectangle(10,30);
echo $rectangle->perimeter() . PHP_EOL;

$square = new Square(12);
echo $square->area() . PHP_EOL;

$square = new Square(33);
echo $square->perimeter() . PHP_EOL;



?>
