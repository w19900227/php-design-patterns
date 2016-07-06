<?php
include_once "IFood.php";

class Chicken extends IFood {
	public function getDescription() {
		return '主餐：雞肉, 附加：';
	}

	public function getCostDetail() {
		return '100';
	}
	
	public function getCost() {
		return 100;
	}
}

?>