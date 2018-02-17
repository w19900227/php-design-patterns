<?php
include_once "Abstraction.php";

class Msi implements Abstraction {
	private $implementor;

	public function __construct(Implementor $implementor) {
		$this->implementor = $implementor;
	}

	public function powerOn() {
		echo "Msi : ";
		$this->implementor->readyStart();
	}

	public function doSomething() {
		echo "Msi : ";
		$this->implementor->request();
	}

	public function powerDown() {
		echo "Msi : ";
		$this->implementor->readyShutdown();
	}
}

?>