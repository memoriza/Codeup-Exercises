<?php

require_once "Log.php";

$log = new Log();

$log->filename = "log-" . date("Y-m-d") . ".log";

$captainsLog = new Log("captainslog");

$captainsLog->info("STARDATES BITCH.") . PHP_EOL;

?>