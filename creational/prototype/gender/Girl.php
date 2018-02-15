<?php
include_once "GenderPrototype.php";
class Girl extends GenderPrototype {
	
	public function __construct() {
		$this->name = 'joy';
		$this->age = '9';
		$this->sex = 'girl';
	}

	function __clone() {}
}

?>