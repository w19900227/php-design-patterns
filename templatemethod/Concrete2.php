<?php

include_once "Template.php";

/**
 * 實作類別1 - 尼克的簡歷
 * 
 * @author Nick Lian
 */
class Concrete2 extends Template {
	public function getName() {
		return "尼克";
	}

	public function getJob() {
		return "軟體工程師";
	}

	public function getSeniority() {
		return "3 years";
	}
}

?>