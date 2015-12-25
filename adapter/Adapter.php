<?php
include_once "Target.php";
include_once "Adaptee.php";
class Adapter implements Target {
	private $adaptee;

	function __construct() {
		$this->adaptee = new Adaptee();
	}

	public function save() {
		$this->adaptee->insert();
	}
}

?>