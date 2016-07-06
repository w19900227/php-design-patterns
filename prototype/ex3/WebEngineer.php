<?php
include_once "IPrototype.php";
class WebEngineer extends IPrototype {

	public function __construct() {
		
	}

	public function setDept($orgCode) {
		switch ($orgCode) {
			case 301:
				$this->dept = 'Web teacher';
				break;
			case 302:
				$this->dept = 'Web junior enginner';
				break;
			case 303:
				$this->dept = 'Web senior enginner';
				break;
		}
	}

	public function getDept() {
		return $this->dept;
	}

	function __clone() {}
}

?>