<?php

$a = 12;
$b = 22;

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    return $a - $b;
}

function multiply($a, $b)
{
    return $a * $b;
}

function divide($a, $b)
{
    return $a / $b;
}

function modulus($a, $b){
	return $a % $b; 
}

echo add(3, 4) . PHP_EOL;
echo subtract(45, 33) . PHP_EOL;
echo multiply(2, 8) . PHP_EOL;
echo divide(77, 7) . PHP_EOL;
echo modulus(22, 2) . PHP_EOL;

