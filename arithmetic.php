<?php


function add($a, $b) {

    if (is_numeric($a) == true || is_numeric($b) == true) {
    	return $a + $b;
	} else {
		echo "Error! Input numeric values for function parameters not $a or $b";
	}
}

function subtract($a, $b) {

	if (is_numeric($a) == true || is_numeric($b) == true) {
    	return $a - $b;
	} else {
		echo "Error! Input numeric values for function parameters not $a or $b";
	}
    
}

function multiply($a, $b) {

	if (is_numeric($a) == true || is_numeric($b) == true) {
    	return $a * $b;
	} else {
		return "Error! Input numeric values for function parameters not $a or $b";
	}
}

function divide($a, $b) {

    if (!is_numeric($a)  || !is_numeric($b) ) {
    	return "Error! Input numeric values for function parameters not $a or $b";
	} elseif ($b == 0) {
		return "Error! Input non-zero numeric values as parameters";
	} else {
		return $a / $b;
	}
}

function modulus($a, $b) {

	if (is_numeric($a) == true || is_numeric($b) == true) {
    	return $a % $b;
	} else {
		return "Error! Input numeric values for function parameters not $a or $b";
	}
}

echo add("farts", "poops") . PHP_EOL;
echo subtract(45, 33) . PHP_EOL;
echo multiply(2, 8) . PHP_EOL;
echo divide(7, "farts") . PHP_EOL;
echo modulus(21, 2) . PHP_EOL;

?>