<?php

function humanizedList($array) {

 	$output = "";
 	$lastValue = array_pop($array);
 	$output = implode(", ", $array);
 	$output .= ", and $lastValue";

 	return $output;


}

function humanizedListSort($array, $sortNames = false) {

	if ($sortNames == true) {

		sort($array);

	} 

	$output = "";
 	$lastValue = array_pop($array);
 	$output = implode(", ", $array);
 	$output .= ", and $lastValue";

 	return $output;

}


function humanizedFirstNameList($array) {

	$output = "";

	$names = implode(", ", $array);
	

	return $names;
}

$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(", ", $physicistsString);
 // Humanize that list

// $famousFakePhysicists = humanizedList($physicistsArray);
$famousFakePhysicists = humanizedListSort($physicistsArray, true);


 // Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.";



?>