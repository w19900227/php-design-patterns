<?php
include_once "IPrototype.php";
class Girl extends IPrototype {
	
	public function __construct() {
		$this->name = 'joy';
		$this->age = '9';
		$this->sex = 'girl';
	}

	function __clone() {}
}

?>