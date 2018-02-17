<?php
include_once "Implementor.php";

class Windows implements Implementor {
	public function power() {
		echo "Windows 電源開啟…<br />";
	}
	public function readyMemory() {
		echo "Windows Memory準備…<br />";
	}
	public function readyCPU() {
		echo "Windows CPU準備…<br />";
	}
}

?>