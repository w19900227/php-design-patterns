<?php
include_once "IPrototype.php";
class AndroidEngineer extends IPrototype {

	public function __construct() {
		
	}

	public function setDept($orgCode) {
		switch ($orgCode) {
			case 201:
				$this->dept = 'Android teacher';
				break;
			case 202:
				$this->dept = 'Android junior enginner';
				break;
			case 203:
				$this->dept = 'Android senior enginner';
				break;
		}
	}

	public function getDept() {
		return $this->dept;
	}

	function __clone() {}
}

?>