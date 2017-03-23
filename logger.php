<?php

function logMessage($logLevel, $message) {

	$time = date("Y-m-d");

	$filename = "log-" . "$time.log";

	$handle = fopen($filename, "a");

	$timeStamp = trim(fwrite($handle, date("Y-m-d") . " " . date("h:i:s") . $logLevel . $message . PHP_EOL));
	if ($timeStamp) {
		echo "logged" . PHP_EOL;
	} else { 
		echo "file did not write properly!" . PHP_EOL;
	}

	fclose($handle);

}

function logInfo() {
	logMessage(" INFO", " This is an info message.") . PHP_EOL;
}

function logError() {
	logMessage(" ERROR", " This is an info message.") . PHP_EOL;
}

logInfo(); 
logError();


