<?php


/**
 * Strategy Pattern(策略模式)
 * 
 * 策略模式為將不同的演算法包裝, 使演算法容易替換
 *  
 * 最重要的就是這個介面, 介面定義了不同演算法的輸出,  
 * 需要新增任何的演算法只要實作這個介面即可
 * 
 * 這邊使用線上購物網站常用的會員做為範例, 
 * 於結帳時會有不同程度的折扣做為範例
 * 
 * @author Nick Lian
 */

interface Strategy {    
	
    /**
     * 這邊會計算商品的總額, 每種會員間會使用不同方式計算
     * 
     * @param priceList
     *        商品的金額的List
     */
	public function calculatePayment($priceList);
}

?>