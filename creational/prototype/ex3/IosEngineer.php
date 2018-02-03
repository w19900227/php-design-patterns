<?php
include_once "IPrototype.php";
class IosEngineer extends IPrototype {

	public function __construct() {
		
	}

	public function setDept($orgCode) {
		switch ($orgCode) {
			case 101:
				$this->dept = 'IOS teacher';
				break;
			case 102:
				$this->dept = 'IOS junior enginner';
				break;
			case 103:
				$this->dept = 'IOS senior enginner';
				break;
		}
	}

	public function getDept() {
		return $this->dept;
	}

	function __clone() {}
}

?>