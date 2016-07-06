<?php

include_once "food/Chicken.php";
include_once "food/Cow.php";
include_once "food/Pig.php";

include_once "food/decorator/Egg.php";
include_once "food/decorator/Vegetables.php";
include_once "food/decorator/Water.php";
include_once "food/decorator/Juice.php";

class Client {
	public function __construct() {
		$cow = new Cow();
		$cow->setStoreName('牛肉店');
		echo '商店名稱：' . $cow->getStoreName();
		$this->mainFood($cow);

		$chicken = new Chicken();
		$chicken->setStoreName('雞肉店');
		echo '商店名稱：' . $chicken->getStoreName();
		$this->mainFood($chicken);

		$pig = new Pig();
		$pig->setStoreName('牛肉店');
		echo '商店名稱：' . $pig->getStoreName();
		$this->mainFood($pig);
	}

	private function mainFood(IFood $mainFood) {
		$mainFood = $this->showOrder($mainFood);
		echo '; 訂單：' . $mainFood->getDescription();
		echo '; 價格：' . $mainFood->getCost();
		echo '(' . $mainFood->getCostDetail() . ')';
		echo '<hr />';
	}

	private function showOrder(IFood $food) {
		$food = new Egg($food);
		$food = new Vegetables($food);
		$food = new Water($food);
		$food = new Juice($food);
		return $food;
	}
}
$client = new Client();

?>