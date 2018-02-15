<?php
include_once "director/Director.php";
include_once "director/Computer.php";

class MacBookProBuilder implements Builder {
	private $computer;

	public function __construct() {
		$this->computer = new Computer();
	}
	public function setMb() {
		$this->computer->setMb("MacBook Pro的主機版");
	}

	public function setPower() {
		$this->computer->setPower("MacBook Pro的電源");
	}

	public function setCpu() {
		$this->computer->setCpu("MacBook Pro的處理器");
	}

	public function setRam() {
		$this->computer->setRam("MacBook Pro的記憶體");
	}

	public function setHdd() {
		$this->computer->setHdd("MacBook Pro的硬碟");
	}

	public function setVga() {
		$this->computer->setVga("MacBook Pro的顯示卡");
	}

	public function buildComputer() {
		return $this->computer;
	}

}
?>