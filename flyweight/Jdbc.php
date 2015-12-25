<?php

include_once "Flyweight.php";
class Jdbc implements Flyweight {
	private $number;

	public function Jdbc($number) {
		$this->number = $number;
	}

	public function getConn() {
		return "連線 : " . $this->number;
	}
}

?>