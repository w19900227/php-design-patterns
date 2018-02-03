<?php

include_once "Element.php";
/**
 * 女人
 * 
 * @author Nick Lian
 */
class Woman implements Element {
	public function accept($visitor) {
		// 執行該訪問者的方法，並傳入自身供訪問者使用
		$visitor->manOpinion($this);
	}

	public function getGender() {
		return "女人";
	}
}

?>