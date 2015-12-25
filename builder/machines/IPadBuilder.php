<?php
include_once "Builder.php";
include_once "Computer.php";

class IPadBuilder implements Builder {
	private $computer;

	public function __construct() {
		$this->computer = new Computer();
	}
	public function setMb() {
		$this->computer->setMb("iPod的主機版");
	}

	public function setPower() {
		$this->computer->setPower("iPod的電源");
	}

	public function setCpu() {
		$this->computer->setCpu("iPod的處理器");
	}

	public function setRam() {
		$this->computer->setRam("iPod的記憶體");
	}

	public function setHdd() {
		$this->computer->setHdd("iPod的硬碟");
	}

	public function setVga() {
		$this->computer->setVga("iPod的顯示卡");
	}

	public function buildComputer() {
		return $this->computer;
	}

}
?>