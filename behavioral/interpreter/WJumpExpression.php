<?php

include_once "Expression.php";
class WJumpExpression implements Expression {
	public function interpret($repeat) {
		return "向前跳" . $repeat . "下";
	}
}

?>