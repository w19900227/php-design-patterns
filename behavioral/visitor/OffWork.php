<?php

include_once "Visitor.php";
/**
 * 用下班後的觀點來比較
 * 
 * @author Nick Lian
 */
class OffWork implements Visitor {
	public function manOpinion($man) {
		echo $man->getGender() . "通常下班就能休息了";
	}
	public function womanOpinion($woman) {
		echo $woman->getGender() . "通常下班還要做家事";
	}
}

?>