<?php
include_once "IFood.php";

class Pig extends IFood {
	public function getDescription() {
		return '主餐：豬肉, 附加：';
	}

	public function getCostDetail() {
		return '120';
	}
	
	public function getCost() {
		return 120;
	}
}

?>