<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);


foreach ($things as $thing) {

	if (is_int($thing)) {
		echo "{$thing} is a integer." . PHP_EOL;

	} elseif (is_float($thing)) {
		echo  "{$thing} is a float." . PHP_EOL;
	} elseif (is_bool($thing)) {
		echo "{$thing} is a boolean." . PHP_EOL;
	} elseif (is_array($thing)) {
		echo "{$thing} is an array." . PHP_EOL;
	} elseif (is_null($thing)) {
		echo "{$thing} is null" . PHP_EOL;
	} elseif (is_string($thing)) {
		echo "{$thing} is a string." . PHP_EOL;
	}
}

foreach ($things as $thing) {

	if (is_scalar($thing)) {
		echo "{$thing} is scalar." . PHP_EOL;

	}
}

foreach ($things as $thing) {

	if (is_array($thing)) {

		echo "Array (";

		foreach($thing as $array) {
			 echo "$array" , " ";

		}
		echo ") " . PHP_EOL;
		
	} else {
		echo $thing . PHP_EOL;
	}
}

?>