<?php

if(isset($argv[1], $argv[2]) && ((is_numeric($argv[1])) && (is_numeric($argv[2])))) {
	$start = $argv[1];
	$end = $argv[2];
	
} else { 

	do {fwrite(STDOUT, "Enter in a numeric value for the start of the range: ");
		$start = trim(fgets(STDIN));
	} while (!is_numeric($start));

	do {fwrite(STDOUT, "Enter in a numeric value for the end of the range: ");
		$end = trim(fgets(STDIN));
	} while (!is_numeric($end));

}

fwrite(STDOUT, "enter in a numeric increment value." . PHP_EOL);
	$incr = trim(fgets(STDIN));

if (empty($incr) || $incr == !is_numeric($incr)) { 

	for ($i = $start; $i <= $end; $i++ ) {
	
		echo $i	. PHP_EOL;

	}

} elseif ($incr >= 1) {

	for ($i = $start; $i <= $end; $i+=$incr ) {
	
		echo $i	. PHP_EOL;

	}

} elseif ($incr < 0) {

	$incr = abs($incr);

	for ($i = $start; $i <= $end; $i+=$incr ) {
			
		echo $i	. PHP_EOL;

	}
} 

?>	