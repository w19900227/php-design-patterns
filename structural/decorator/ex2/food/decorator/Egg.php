<?php
include_once "food/Decorator.php";

class Egg extends Decorator {
	private $food;

	public function __construct(IFood $food) {
		$this->food = $food;
	}

	public function getDescription() {
		return $this->food->getDescription() . ',蛋';
	}

	public function getCostDetail() {
		return $this->food->getCostDetail() . '+10';
	}
	
	public function getCost() {
		return $this->food->getCost() + 10;
	}
}

?>