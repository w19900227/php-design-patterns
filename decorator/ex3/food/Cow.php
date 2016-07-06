<?php
include_once "IFood.php";

class Cow extends IFood {
	public function getDescription() {
		return '主餐：牛肉, 附加：';
	}

	public function setStoreName($storeName) {
		$this->StoreName = $storeName;
	}

	public function getStoreName() {
		return $this->StoreName;
	}

	public function getCostDetail() {
		return '200';
	}
	
	public function getCost() {
		return 200;
	}
}

?>