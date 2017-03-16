<?php 

$states = [
			    'AL' => 'Alabama',
			    'AK' => 'Alaska',
			    'AZ' => 'Arizona',
			    'AR' => 'Arkansas',
			    'CA' => 'California',
			    'CO' => 'Colorado',
			    'CT' => 'Connecticut',
			    'DE' => 'Delaware',
			    'DC' => 'District of Columbia',
			    'FL' => 'Florida',
			    'GA' => 'Georgia',
			    'HI' => 'Hawaii',
			    'ID' => 'Idaho',
			    'IL' => 'Illinois',
			    'IN' => 'Indiana',
			    'IA' => 'Iowa',
			    'KS' => 'Kansas',
			    'KY' => 'Kentucky',
			    'LA' => 'Louisiana',
			    'ME' => 'Maine',
			    'MD' => 'Maryland',
			    'MA' => 'Massachusetts',
			    'MI' => 'Michigan',
			    'MN' => 'Minnesota',
			    'MS' => 'Mississippi',
			    'MO' => 'Missouri',
			    'MT' => 'Montana',
			    'NE' => 'Nebraska',
			    'NV' => 'Nevada',
			    'NH' => 'New Hampshire',
			    'NJ' => 'New Jersey',
			    'NM' => 'New Mexico',
			    'NY' => 'New York',
			    'NC' => 'North Carolina',
			    'ND' => 'North Dakota',
			    'OH' => 'Ohio',
			    'OK' => 'Oklahoma',
			    'OR' => 'Oregon',
			    'PA' => 'Pennsylvania',
			    'PR' => 'Puerto Rico',
			    'RI' => 'Rhode Island',
			    'SC' => 'South Carolina',
			    'SD' => 'South Dakota',
			    'TN' => 'Tennessee',
			    'TX' => 'Texas',
			    'VI' => 'US Virgin Islands',
			    'UT' => 'Utah',
			    'VT' => 'Vermont',
			    'VA' => 'Virginia',
			    'WA' => 'Washington',
			    'WV' => 'West Virginia',
			    'WI' => 'Wisconsin',
			    'WY' => 'Wyoming'
			  ];

echo "States with an 'x' in them" . PHP_EOL;

foreach ($states as $abrv => $state ) {

	$pos = strrpos($state, "x");
		
	if ($pos == true) {
			echo "$abrv : $state" . PHP_EOL;
	}
}

echo "States without an 'a' in them" . PHP_EOL;

foreach ($states as $abrv => $state ) {

	$pos = strrpos($state, "a");
		
	if ($pos == false) {
		echo "$abrv : $state" . PHP_EOL;
	}
}

echo "States with vowels in the beginning of their name" . PHP_EOL;

foreach ($states as $abrv => $state ) {

	$vowels = ["A","E","I","O","U"];

	$pos = in_array($state[0], $vowels ,true);
				
	if ($pos == true) {
		echo "$abrv : $state" . PHP_EOL;
	}
}

echo "States with vowels at the beginning and end of the state name" . PHP_EOL;

foreach ($states as $abrv => $state) {

	$upperVowels = ["A","E","I","O","U"];
	$lowerVowels = ["a","e","i","o","u"];

	$statesStartingAndEndingWithVowels = [];

	if (in_array($state{0}, $upperVowels ,true) && in_array(substr($state, -1), $lowerVowels)) {

		array_push($statesStartingAndEndingWithVowels, $state);
		
	}

	foreach ($statesStartingAndEndingWithVowels as $svowels) {
		echo($svowels) . PHP_EOL;
	}
}

?>