<?php

include_once "Element.php";
/**
 * 男人
 * 
 * @author Nick Lian
 */
class Man implements Element {
	public function accept($visitor) {
		// 執行該訪問者的方法，並傳入自身供訪問者使用
		$visitor->manOpinion($this);
	}

	public function getGender() {
		return "男人";
	}
}

?>