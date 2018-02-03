<?php
include_once "IFood.php";

class Pig extends IFood {
	public function getDescription() {
		return '主餐：豬肉, 附加：';
	}

	public function setStoreName($storeName) {
		$this->StoreName = $storeName;
	}

	public function getStoreName() {
		return $this->StoreName;
	}

	public function getCostDetail() {
		return '120';
	}
	
	public function getCost() {
		return 120;
	}
}

?>