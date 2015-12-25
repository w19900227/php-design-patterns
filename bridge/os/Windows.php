<?php
include_once "Implementor.php";

class Windows implements Implementor {
	public function readyStart() {
		echo "Windows作業系統載入，各項軟體載入記憶體準備…<br />";
	}
	public function request() {
		echo "使用者點擊了滑鼠，開啟iTunes…<br />";
	}
	public function readyShutdown() {
		echo "使用者點了關機，關閉各項軟體並關閉Windows作業系統…<br />";
	}
}

?>