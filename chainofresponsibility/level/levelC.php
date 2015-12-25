<?php
include_once "Handler.php";

class levelC implements Handler {
	private $handler;

	public function request($i) {
		if ( $i >= 3 ) {
			return "等級" . $i . "只能給C級英雄處理";
		}
		return $this->handler->request($i);
	}

	public function setNextHandler(Handler $handler) {
		$this->handler = $handler;
	}
}

?>