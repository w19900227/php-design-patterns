<?php

include_once "Template.php";

/**
 * 實作類別1 - Nick的簡歷
 * 
 * @author Nick Lian
 */
class Concrete1 extends Template {
	public function getName() {
		return "Nick";
	}

	public function getJob() {
		return "Software Engineer";
	}

	public function getSeniority() {
		return "3 years";
	}
}

?>