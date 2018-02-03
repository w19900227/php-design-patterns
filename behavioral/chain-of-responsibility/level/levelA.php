<?php
include_once "Handler.php";

class levelA implements Handler {
	private $handler;

	public function request($i) {
		if ( $i == 1 ) {
			return "等級" . $i . "只能給A級英雄處理";
		}
		return $this->handler->request($i);
	}

	public function setNextHandler(Handler $handler) {
		$this->handler = $handler;
	}
}

?>