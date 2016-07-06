<?php

include_once "Boy.php";
include_once "Girl.php";

class Client {
	public function __construct() {
		$boy = new Boy();
		$girl = new Girl();

		$copy_boy = clone $boy;
		$copy_girl = clone $girl;

		$updateCloneGirl = clone $copy_girl;
		$updateCloneGirl->name = "updateCloneGirl";
		$updateCloneGirl->age = "11";
		$updateCloneGirl->sex = "update Clone Girl";

		$this->display($copy_boy);
		$this->display($copy_girl);
		$this->display($updateCloneGirl);
		$this->display($copy_girl);
	}

	private function display(IPrototype $data) {
		echo 'Name : ' . $data->name . '<br />';
		echo 'Age : ' . $data->age . '<br />';
		echo 'Sex : ' . $data->sex . '<br />';
		echo '<hr />';
	}
}

$client = new Client();

?>