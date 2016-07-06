<?php
include_once "food/Decorator.php";

class Water extends Decorator {
	private $food;

	public function __construct(IFood $food) {
		$this->food = $food;
	}

	public function getDescription() {
		return $this->food->getDescription() . ',水';
	}

	public function getCostDetail() {
		return $this->food->getCostDetail() . '+25';
	}
	
	public function getCost() {
		return $this->food->getCost() + 25;
	}
}

?>