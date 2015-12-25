<?php

// include_once "StringBuffer.php";
include_once "WRunExpression.php";
include_once "SRunExpression.php";
include_once "WJumpExpression.php";

class Context {

	public function interpret($command) {
		$steps = explode(",", $command);
		$result = "";

		foreach ( $steps as $step ) {
			$actionAndRepeat = explode(":", $step);
			$action = $actionAndRepeat[0];
			$repeat = $actionAndRepeat[1];
			$expression = null;
            if ($action == "W-RUN") {
                $expression = new WRunExpression();
            }
            if ($action == "S-RUN") {
                $expression = new SRunExpression();
            }
            if ($action == "W-JUMP") {
                $expression = new WJumpExpression();
            }

            $response = $expression->interpret($repeat);
            $result .=  $response . "<br />";
		}
		return $result;
	}
}


?>