<?php
include_once "GenderPrototype.php";
class Boy extends GenderPrototype {
	
	public function __construct() {
		$this->name = 'nick';
		$this->age = '10';
		$this->sex = 'boy';
	}

	function __clone() {}
}

?>