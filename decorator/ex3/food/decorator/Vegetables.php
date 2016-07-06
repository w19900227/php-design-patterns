<?php
include_once "food/Decorator.php";

class Vegetables extends Decorator {
	private $food;

	public function __construct(IFood $food) {
		$this->food = $food;
	}

	public function getDescription() {
		return $this->food->getDescription() . ',蔬菜';
	}

	public function getCostDetail() {
		return $this->food->getCostDetail() . '+55';
	}
	
	public function getCost() {
		return $this->food->getCost() + 55;
	}
}

?>