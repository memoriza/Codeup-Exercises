<?php 

class Model {

	private $attributes = [];

	public function __set($name, $value) {

		$this->$attributes[$name] = $value;

	}

	public function __get($name) {

		if (array_key_exists($name, $this->attributes)) {

			return $this->attributes[$name];

		} else {

			return null;

		}

	}

}

$array = new Model();

$array = $attributes["billy"] = "smelly";
$array = $attributes["sam"] = "sweaty";
$array = $attributes["Jen"] = "quaint";

var_dump($attributes);

?>