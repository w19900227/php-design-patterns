<?php

abstract class IPrototype {
	protected $name;
	protected $age;
	protected $dept;

	protected abstract function setDept($orgCode);
	protected abstract function getDept();

	public function setName($name) {
		$this->name = $name;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function setAge($age) {
		$this->age = $age;
	}
	
	public function getAge() {
		return $this->age;
	}

	abstract function __clone();
}

?>