<?php
include_once "IPrototype.php";
class Boy extends IPrototype {
	
	public function __construct() {
		$this->name = 'nick';
		$this->age = '10';
		$this->sex = 'boy';
	}

	function __clone() {}
}

?>