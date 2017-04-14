<?php 

// returns true or false based on whether the key is available.

function inputHas($key) {

	if($_REQUEST[$key]) {
		return "true";
	} else {
		return "false";
	}

} 

 // returns the value specified by the key, or null if the key is not set.

function inputGet($key) {

	if($_REQUEST[$key]) {
		return $key;
	} else {
		return null;
	}

}

// returns the input as a safely escaped string.

function escape($input) {

	echo htmlspecialchars(strip_tags($input));

}


?>