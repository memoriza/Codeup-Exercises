<?php

function formatNumber($number) {

return substr($number, 0, 3) . "-" . substr($number, 3, 3) . "-" . substr($number, 6,4);

}

function parseContacts() {
    
    $filename = "contacts.txt";
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
  	$contents = trim($contents);
  	fclose($handle);
    $contacts = explode("\n", $contents);
    $finalArray = [];

    foreach ($contacts as $contact) {
 		
 		$infoArray = explode("|", $contact);

	    $results = []; 

 		foreach ($infoArray as $key => $value) {

 			if ( $key == 0) {
 				$results['name'] = $value;
 			} else {
 				$results['number'] = formatNumber($value);
 			}

 		}

 		array_push($finalArray, $results);

    }

  
	return($finalArray); 
	
}

print_r(parseContacts());





