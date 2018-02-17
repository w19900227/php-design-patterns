<?php
include_once "Abstraction.php";
include_once "os/OSX.php";

class Mac implements Abstraction {
	private $implementor;

	public function __construct() {
		$this->implementor = new OSX();
	}

	public function powerOn() {
		echo "Mac : <br />";
		$this->implementor->power();
		$this->implementor->readyMemory();
		$this->implementor->readyCPU();
	}
}

?>