<?php
/**
 * 訪問者
 * 
 * 宣告實作類別中，有幾種元素需要處理，
 * 所以有幾種Element，這邊就要有幾個method
 * 
 * @author Nick Lian
 */
interface Visitor {
    
    /**
     * 對於男人的看法
     */
	public function manOpinion($man);

    /**
     * 對於女人的看法
     */
	public function womanOpinion($woman);
}

?>