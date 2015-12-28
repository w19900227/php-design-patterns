<?php
/**
 * 供外部存取的接口
 * 
 * @author Nick Lian
 */
class Context {
	private $strategy;
	public function Context($strategy) {
		$this->strategy = $strategy;
	}

	public function getTotalPayment($priceList) {
		return $this->strategy->calculatePayment($priceList);
	}
}

?>