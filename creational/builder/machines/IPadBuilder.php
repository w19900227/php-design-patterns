<?php
include_once "director/Director.php";
include_once "director/Computer.php";

class IPadBuilder implements Builder {
	private $computer;

	public function __construct() {
		$this->computer = new Computer();
	}
	public function setMb() {
		$this->computer->setMb("iPad的主機版");
	}

	public function setPower() {
		$this->computer->setPower("iPad的電源");
	}

	public function setCpu() {
		$this->computer->setCpu("iPad的處理器");
	}

	public function setRam() {
		$this->computer->setRam("iPad的記憶體");
	}

	public function setHdd() {
		$this->computer->setHdd("iPad的硬碟");
	}

	public function setVga() {
		$this->computer->setVga("iPad的顯示卡");
	}

	public function buildComputer() {
		return $this->computer;
	}

}
?>