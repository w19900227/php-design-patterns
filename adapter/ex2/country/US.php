<?php

include_once "ITarget.php";

class US implements ITarget {
	public $rate = 1;
	public $money;
	public function requestTotal($product_money, $service_money) {
		$this->money = $product_money + $service_money;
		return $this->setTotal();
	}

	public function setTotal() {
		return $this->money * $this->rate;
	}
}


?>