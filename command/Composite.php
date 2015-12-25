<?php

include_once "Component.php";

class Composite implements Component {

	private $name;
	private $childList = array();

	public function Composite($name) {
		$this->name = $name;
	}

	public function add(Component $component) {
		// $this->childList->add($component);
		print_r($this->childList);
		array_push($this->childList, $component);
	}

	public function remove(Component $component) {
		// $this->childList->remove($component);
		unset($this->childList[$component]);
	}

	public function display($i) {
		for ( $j=0; $j<$i; $j++ ) {
			echo "|---";
		}
		echo $this->name;
		echo "<br />";
		// foreach ( $this->childList as $key => $value ) {
		// 	echo $value;
		// }
	}
}

?>