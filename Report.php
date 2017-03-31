<?php 

class Report {

	public $name;
	public $age;
	
	public static $numberOfReports = 0;

	public function __construct($name = "John Doe", $age) {

		$this->name = $name;
		$this->age = $age;

		// increment number of reports 
		static::$numberOfReports++;

	}

	public function writeReport($message) {
		return $message;
	}

	public static function getNumberOfReports() {
		return static::$numberOfReports;
	}

}

?>