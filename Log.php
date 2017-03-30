<?php

class Log {
    
    public $filename;

    function logMessage($logLevel, $message){

        $time = date("Y-m-d");
    
        $filename = "log-" . $time . ".log";
    
        $hours = date("Y-m-d") . " " . date("h:i:s") . PHP_EOL;
        
        $handle = fopen($this->filename, 'a');
    
        fwrite($handle, $hours . $logLevel . " " . $message);
    
        fclose($handle);

    }

    function info($message){
        $this->logMessage("INFO", $message . PHP_EOL);
    }
    
    function error($message){
        $this->logMessage("ERROR", $message . PHP_EOL);
    }

}