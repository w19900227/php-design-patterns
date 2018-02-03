<?php

include_once "Visitor.php";
/**
 * 用開車的觀點來比較
 * 
 * @author Nick Lian
 */
class DriveCar implements Visitor {
	public function manOpinion($man) {
		echo $man->getGender() . "通常開車技術會比較好";
	}
	public function womanOpinion($woman) {
		echo $woman->getGender() . "通常開車技術會比較不好";
	}
}

?>