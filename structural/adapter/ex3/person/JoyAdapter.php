<?php
include_once "Joy.php";
class JoyAdapter extends Joy {

	private $joy;
	function __construct() {
		$this->joy = new Joy();
	}

	public function getName() {
		return $this->joy->getName();
	}

	public function getTraffic() {
		return $this->joy->getTrafficCar();
	}
}

?>