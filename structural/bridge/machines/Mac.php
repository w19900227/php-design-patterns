<?php
include_once "Abstraction.php";

class Mac implements Abstraction {
	private $implementor;

	public function __construct(Implementor $implementor) {
		$this->implementor = $implementor;
	}

	public function powerOn() {
		echo "Mac : ";
		$this->implementor->readyStart();
	}

	public function doSomething() {
		echo "Mac : ";
		$this->implementor->request();
	}

	public function powerDown() {
		echo "Mac : ";
		$this->implementor->readyShutdown();
	}
}

?>