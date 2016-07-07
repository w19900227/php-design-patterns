<?php
include_once "Handler.php";

class levelC implements Handler {
	private $handler;

	public function request($i) {
		if ( $i >= 3 && $i < 5 ) {
			return "等級" . $i . "只能給C級英雄處理";
		}
		return "沒大於" . $i . "的警報";
	}

	public function setNextHandler(Handler $handler) {
		$this->handler = $handler;
	}
}

?>