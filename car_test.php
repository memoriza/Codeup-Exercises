<?php 

require_once "Report.php";

echo "At the start of my day: I have: " . Report::$numberOfReports . " reports." . PHP_EOL;

echo "do you have any idea why I pulled you over today?" . PHP_EOL;

$jane = new Report("Jane", 78);

echo $jane->writeReport("Doing 90 in a 25.") . PHP_EOL;

echo "Today's total number of reports:";

echo " " . Report::getNumberOfReports();

?>

