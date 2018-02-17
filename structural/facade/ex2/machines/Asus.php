<?php
include_once "Abstraction.php";
include_once "os/Windows.php";

class Asus implements Abstraction {
	private $implementor;

	public function __construct() {
		$this->implementor = new Windows();
	}

	public function powerOn() {
		echo "華碩電腦 : <br />";
		$this->implementor->power();
		$this->implementor->readyMemory();
		$this->implementor->readyCPU();
	}
}

?>