<?php 

class Rectangle 

{

	public $height;
	public $width;

	public function __construct($height,$width) {
		$this->height = $height;
		$this->width = $width;
	}

	public function area() {

		$area = ($this->height * $this->width);

		return $area;
	}

	public function perimeter() {

		$perimeter = (2 * ($this->height + $this->width));

		return $perimeter;

	}

}



?>