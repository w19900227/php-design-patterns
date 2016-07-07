<?php

include_once "Template.php";

/**
 * 實作類別1 - Nick的簡歷
 * 
 * @author Nick Lian
 */
class Concrete1 extends Template {
	protected function getName() {
		return "Nick";
	}

	protected function getJob() {
		return "Software Engineer";
	}

	protected function getSeniority() {
		return "3 years";
	}
}

?>