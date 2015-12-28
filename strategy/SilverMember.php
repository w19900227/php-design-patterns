<?php

include_once "Strategy.php";
/**
 * 白銀會員
 * 
 * @author Nick Lian
 */
class SilverMember implements Strategy {
    /**
     * 滿1000折200
     */
    public function calculatePayment($priceList) {
    	// 原價總額
    	$total = array_sum($priceList);
    	// 能折扣多少
    	$rebate = $total / 1000 * 200;
    	return $total - $rebate;
    }
}

?>