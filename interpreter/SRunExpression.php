<?php

include_once "Expression.php";
class SRunExpression implements Expression {
	public function interpret($repeat) {
		return "向後跑" . $repeat . "步";
	}
}

?>