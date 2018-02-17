<?php
include_once "Abstraction.php";
include_once "os/Windows.php";

class Msi implements Abstraction {
	private $implementor;

	public function __construct() {
		$this->implementor = new Windows();
	}

	public function powerOn() {
		echo "Msi : <br />";
		$this->implementor->power();
		$this->implementor->readyMemory();
		$this->implementor->readyCPU();
	}
}

?>