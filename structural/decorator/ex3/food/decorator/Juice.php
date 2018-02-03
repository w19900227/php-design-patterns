<?php
include_once "food/Decorator.php";

class Juice extends Decorator {
	private $food;

	public function __construct(IFood $food) {
		$this->food = $food;
	}

	public function getDescription() {
		return $this->food->getDescription() . ',果汁';
	}

	public function getCostDetail() {
		return $this->food->getCostDetail() . '+40';
	}
	
	public function getCost() {
		return $this->food->getCost() + 40;
	}
}

?>