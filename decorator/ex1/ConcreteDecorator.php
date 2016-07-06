<?php

include_once "Decorator.php";
class ConcreteDecorator implements Decorator {
	private $component;
	public function ConcreteDecorator(Component $component) {
		$this->component = $component;
	}
	public function request() {
		echo "在情報前面加密///";
		$this->component->request();
		echo "///在情報後面加密";
	}
}

?>