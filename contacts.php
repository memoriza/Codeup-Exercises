<?php

function mainMenu () { 

	echo "Hello! Choose option 1-5. \n 1) View Contacts \n 2) Add a New Contact \n 3) Search a Contact by Name \n 4) Delete an Existing Contact \n 5) Exit " . PHP_EOL;

	$userChoice = fgets(STDIN);

	switch ($userChoice) {

    case 1:
        echo "View Contacts" . PHP_EOL;
        return contactsToString(fileReadAndDisplay());
        break;

    case 2:
        echo "Add a New Contact" . PHP_EOL;
        return addContact();
        break;

    case 3:
        echo "Search a Contact by Name" . PHP_EOL;
        break;

    case 4:
    	echo "Delete an Existing Contact" . PHP_EOL;
    	break;

    case 5:
    	echo "Exit" . PHP_EOL;
    	exit("Goodbye" . PHP_EOL);
    	break;

	}

}

function addContact () {

	$filename = "contacts.txt";
	$handle = fopen($filename, "a");
	
	echo "What is your name? ";
	$userName = trim(fgets(STDIN));
	echo "What is your number? ";
	$userNumber = trim(fgets(STDIN));
	
	$userInput = fwrite($handle,"{$userName}|{$userNumber} ");

	echo "Thanks for your information {$userName}." . PHP_EOL;

	fclose($handle);

	mainMenu();

	return $userInput;

}

function formatNumber($number) {

return substr($number, 0, 3) . "-" . substr($number, 3, 3) . "-" . substr($number, 6,4);

}

function fileReadAndDisplay() {

	clearstatcache();
    
   	$string = "";
    $filename = "contacts.txt";
    $handle = fopen($filename, "r");
    $contents = fread($handle, filesize($filename));
  	$contents = trim($contents);
  	fclose($handle);
    $contacts = explode("\n", $contents);

    $contactsArray = [];

    foreach ($contacts as $contact) {
 		
 		$infoArray = explode("|", $contact);

	    $results = []; 

 		foreach ($infoArray as $key => $value) {

 			if (!is_numeric($value)) {
 				$results['name'] = $value;
 			} else {
 				$results['number'] = formatNumber($value);
 			}

 		}

 		array_push($contactsArray, $results);

	}

	return $contactsArray; 
}



function contactsToString ($contactsArray) {

 	foreach ($contactsArray as $key => $contact) {
 		echo ($contact['name']) . " | " . $contact['number'] . PHP_EOL;
 	}

}


function specificName ($contactsArray) {

	foreach($contactsArray as $key => $contact) {
		echo ($contacts)
	}


}

function 
mainMenu();

?>