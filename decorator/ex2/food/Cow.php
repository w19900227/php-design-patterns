<?php
include_once "IFood.php";

class Cow extends IFood {
	public function getDescription() {
		return '主餐：牛肉, 附加：';
	}

	public function getCostDetail() {
		return '200';
	}
	
	public function getCost() {
		return 200;
	}
}

?>