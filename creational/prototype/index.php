<?php

include_once "gender/Boy.php";
include_once "gender/Girl.php";
include_once "gender/GenderPrototype.php";

class Client {
	public function __construct() {
		$boy = new Boy();
		$girl = new Girl();

		$copy_boy = clone $boy;
		$this->display($copy_boy);

		$copy_girl = clone $girl;
		$this->display($copy_girl);

		$updateCloneGirl = clone $copy_girl;
		$updateCloneGirl->name = "updateCloneGirl";
		$updateCloneGirl->age = "11";
		$updateCloneGirl->sex = "update Clone Girl";
		$this->display($updateCloneGirl);

		$this->display($copy_girl);
	}

	private function display(GenderPrototype $data) {
		echo 'Name : ' . $data->name . '<br />';
		echo 'Age : ' . $data->age . '<br />';
		echo 'Sex : ' . $data->sex . '<br />';
		echo '<hr />';
	}
}

$client = new Client();

?>