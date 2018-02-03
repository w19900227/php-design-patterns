<?php
include_once "Strategy.php";
/**
 * 黃金會員
 * 
 * @author Nick Lian
 */
class GoldMember implements Strategy {

    /**
     * 打五折
     */
	public function calculatePayment($priceList) {
		$total = array_sum($priceList);
		return $total * 5 / 10;
	}
}

?>