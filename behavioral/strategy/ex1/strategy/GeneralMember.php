<?php
include_once "Strategy.php";
/**
 * 一般會員
 * 
 * @author Nick Lian
 */
class GeneralMember implements Strategy {

    /**
     * 打九折
     */
	public function calculatePayment($priceList) {
		$total = array_sum($priceList);
		return $total * 9 / 10;
	}
}

?>