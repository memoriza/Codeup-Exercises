<?php

function runMainMenu () { 

    overheadDisplay();
    contactsToString(fileReadAndDisplay());

	fwrite(STDOUT, "Hello. Choose option 1-5. \n 1) View Contacts \n 2) Add a New Contact \n 3) Search a Contact by Name \n 4) Delete an Existing Contact \n 5) Exit ") . PHP_EOL;

	$userChoice = trim(fgets(STDIN));

     if ($userChoice < 1 || $userChoice > 5 || !is_numeric($userChoice)) { 

        echo "enter in a value of 1 through 5.";
    
    	} else {

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
            return userSearch();
            break;

        case 4:
            echo "Delete an Existing Contact" . PHP_EOL;
            return deleteContact();
            break;

        case 5:
            echo "Exit" . PHP_EOL;
            exit("Goodbye" . PHP_EOL);
            break;
        }

    }

}

function overheadDisplay () {

    echo "---------------------------" . PHP_EOL;
    echo "------CONTACT MANAGER------" . PHP_EOL;
    echo "---------------------------" . PHP_EOL;

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

function contactsToString () {

    $contactsArray = fileReadAndDisplay();

 	foreach ($contactsArray as $key => $contact) {
 		echo $contact['name'] . " | " . $contact['number'] . PHP_EOL;
 	}

}

function addContact () {

    $filename = "contacts.txt";
    $handle = fopen($filename, "a");
    
    echo "What is your name? ";
    $userName = trim(fgets(STDIN));
    echo "What is your number? ";
    $userNumber = trim(fgets(STDIN));
    
    $userInput = fwrite($handle, PHP_EOL . "{$userName}|{$userNumber}");


    echo "Thanks for your information {$userName}." . PHP_EOL;

    fclose($handle);

    runMainMenu();

    return $userInput;

}

function userSearch () {

    $array = fileReadAndDisplay();

	fwrite(STDOUT, "Type in Name or Number to search for ");
    $query = fgets(STDIN);

    $message = "search result found";

    foreach($array as $key => $search) {

        if (is_numeric(strpos($search['name'], trim($query))) !== false) {
            echo $search['name'] . " | " . $search['number'] . PHP_EOL;
            echo $message . PHP_EOL;

        } 

        if ($message == false){
            echo "search result not found";
        }

    }
}

function deleteContact() {

    $array = fileReadAndDisplay();

    fwrite(STDOUT, "Type in Name or Number for the Contact to delete");

    $query = trim(fgets(STDIN));

    foreach($array as $key => $search) {
        
        

        if (is_numeric(strpos($search['name'], trim($query))) !== false) {
            echo $search['name'] . " | " . $search['number'] . PHP_EOL;
            echo "search result found" . PHP_EOL;
            $contactFound = true;
            $message = true;
            break;
        } 
    }

    if ($message == false) {
        echo "search result not found";
    }

    if ($contactFound == true) {

        $filename = "contacts.txt";
        $handle = fopen($filename, "w");

        foreach($array as $key => $search) {

            if (is_numeric(strpos($search['name'], trim($query))) == false) {
                $plainNumber = substr($search['number'], 0,3) . substr($search['number'], 4,3) . substr($search['number'],8);
                fwrite($handle, PHP_EOL . $search['name'] . "|" . $plainNumber);
            }
        }

        fclose($handle);

        echo PHP_EOL . "contact deleted" . PHP_EOL;

    } else {
        echo "No contact to delete by that name." . PHP_EOL;
    }

}

runMainMenu();

?>