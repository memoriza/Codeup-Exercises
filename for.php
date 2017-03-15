<?php

do {fwrite(STDOUT, "Enter in a numeric value for the start of the range: ");
	$start = trim(fgets(STDIN));
} while (!is_numeric($start));

do {fwrite(STDOUT, "Enter in a numeric value for the end of the range: ");
	$end = trim(fgets(STDIN));
} while (!is_numeric($end));

fwrite(STDOUT, "enter in a numeric increment value." . PHP_EOL);
	$incr = trim(fgets(STDIN));

if ($incr > 1) {

	for ($i = $start; $i <= $end; $i+=$incr ) {
	
		echo $i	. PHP_EOL;

	}

} elseif ($incr == false || $incr == 0 || $incr == "") { 

	for ($i = $start; $i <= $end; $i++ ) {
	
		echo $i	. PHP_EOL;

	}

} else {

	for ($i = $start; $i <= $end; $i++ ) {
	
		echo $i	. PHP_EOL;

	}
}

?>	