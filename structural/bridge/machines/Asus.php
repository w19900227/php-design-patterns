<?php
include_once "Abstraction.php";

class Asus implements Abstraction {
	private $implementor;

	public function __construct(Implementor $implementor) {
		$this->implementor = $implementor;
	}

	public function powerOn() {
		echo "華碩電腦 : ";
		$this->implementor->readyStart();
	}

	public function doSomething() {
		echo "華碩電腦 : ";
		$this->implementor->request();
	}

	public function powerDown() {
		echo "華碩電腦 : ";
		$this->implementor->readyShutdown();
	}
}

?>