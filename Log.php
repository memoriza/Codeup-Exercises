<?php

class Log {
    
    private $filename;
    private $handle;

    public function __construct($prefix = "log") {
        $this->setFilename($prefix);
        $this->handle = fopen($this->filename, 'a');

    }

    private function setFilename($prefix) {

        $this->filename = $prefix . "-" . date("Y-m-d") . ".log";

    }

    

    public function logMessage($logLevel, $message){
    
        $hours = date("Y-m-d") . " " . date("h:i:s") . PHP_EOL;
        
        $handle = fopen($this->filename, 'a');
    
        fwrite($handle, $hours . $logLevel . " " . $message);

    }

    public function info($message){
        $this->logMessage("INFO", $message . PHP_EOL);
    }
    
    public function error($message){
        $this->logMessage("ERROR", $message . PHP_EOL);
    }

    public function __destruct() {
        fclose($this ->handle);
    }

}