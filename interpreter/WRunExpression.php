<?php

include_once "Expression.php";
class WRunExpression implements Expression {
	public function interpret($repeat) {
		return "向前跑" . $repeat . "步";
	}
}

?>