<?php 

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(20,20);
echo $rectangle->area() . PHP_EOL;
$square = new Square(9,9);
echo $square->perimeter() . PHP_EOL;

?>
