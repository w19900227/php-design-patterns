<?php

abstract class IPrototype {
	public $name;
	public $age;
	public $sex;
	abstract function __clone();
}

?>