<?php
include_once "IFood.php";

abstract class Decorator extends IFood {
	
	public function setStoreName($storeName) {
		$this->StoreName = $storeName;
	}

	public function getStoreName() {
		return $this->StoreName;
	}

}

?>