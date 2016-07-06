<?php

abstract class CloneMe {
	public $name;
	public $age;
	abstract function __clone();
}

class Person extends CloneMe {
	public function __construct() {
		echo 'Prototype - design pattern<br />';
		$this->name = 'nick';
		$this->age = '24';
	}

	public function display() {
		echo 'Name : ' . $this->name . '<br />';
		echo 'Age : ' . $this->age . '<br />';
		echo '<hr />';
	}

	function __clone() {}
}

$person = new Person();
$person->display();

$test = clone $person;
$test->name = 'test-name';
$test->age = '2';
$test->display();
$person->display();

?>