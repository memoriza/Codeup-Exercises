<?php

do {echo "a) is Addition ";
	echo "b) is Subtraction ";
	echo "c) is Multiplication ";
	echo "d) is Divide ";
	echo "q) is Quit" . PHP_EOL;
	
	echo "Enter in option (a, b, c, d, q). " . PHP_EOL;

	$option = trim(fgets(STDIN));

	switch ($option) {

		case "a": 

			echo "enter the first number ";
			$a = trim(fgets(STDIN));
			echo "enter the second number ";
			$b = trim(fgets(STDIN));
			echo ($a + $b) . PHP_EOL;
			break;

		case "b":

			echo "enter the first number ";
			$a = trim(fgets(STDIN));
			echo "enter the second number ";
			$b = trim(fgets(STDIN));
			echo ($a - $b) . PHP_EOL;
			break; 

		case "c":

			echo "enter the first number ";
			$a = trim(fgets(STDIN));
			echo "enter the second number ";
			$b = trim(fgets(STDIN));
			echo ($a * $b) . PHP_EOL;
			break;

		case "d":

			echo "enter the first number ";
			$a = trim(fgets(STDIN));
			echo "enter the second number ";
			$b = trim(fgets(STDIN));
			echo ($a / $b) . PHP_EOL;
			break;

		default:

			echo "bye bye" . PHP_EOL;

			break;

	} 

} while ($option !== "q");


?>