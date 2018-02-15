<?php

abstract class GenderPrototype {
	public $name;
	public $age;
	public $sex;
	abstract function __clone();
}

?>