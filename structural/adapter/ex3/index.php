<?php

include_once "person/Tony.php";
include_once "person/JoyAdapter.php";

class Client {
	public function __construct() {
		$tony = new Tony();
		$joyAdapter = new JoyAdapter();
		$this->display($tony);
		$this->display($joyAdapter);

	}

	public function display($person) {
		echo 'Name : ' . $person->getName() . '<br />';
		echo 'Traffic : ' . $person->getTraffic() . '<br />';
		echo '<hr />';
	}

}

$client = new Client();

?>