<?php

include_once "Component.php";
class ConcreteComponent implements Component {
	public function request() {
		echo "發出一段情報";
	}
}

?>