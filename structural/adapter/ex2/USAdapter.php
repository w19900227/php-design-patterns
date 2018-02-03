<?php
include_once "country/US.php";
include_once "country/ITarget.php";
class USAdapter extends US {

	public $us;
	function __construct() {
		$this->setRate();
	}

	public function setRate() {
		$this->rate = 0.9;
	}
}

?>