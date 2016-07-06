<?php

include_once "USAdapter.php";
include_once "country/JP.php";
include_once "country/US.php";

class Client {
	public function __construct() {
		$us = new US();
		$jp = new JP();
		$usAdapter = new USAdapter();

		echo 'Using Cash - JP : ' . $this->request($jp) . '<br />';
		echo 'Using Cash - US : ' . $this->request($us) . '<br />';
		echo 'Using Card - US : ' . $this->request($usAdapter) . '<br />';

	}

	public function request(ITarget $us) {
		return $us->requestTotal(90, 10);
	}
}

$client = new Client();

?>