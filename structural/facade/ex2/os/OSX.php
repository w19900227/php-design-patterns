<?php
include_once "Implementor.php";

class OSX implements Implementor {
	public function power() {
		echo "OSX 電源開啟…<br />";
	}
	public function readyMemory() {
		echo "OSX Memory準備…<br />";
	}
	public function readyCPU() {
		echo "OSX CPU準備…<br />";
	}
}

?>