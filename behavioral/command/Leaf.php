<?php

include_once "Component.php";
class Leaf implements Component {
	private $name;

	public function Leaf($name) {
		$this->name = $name;
	}

	public function add(Component $component) {
		echo "葉節點不可增加子節點";
		echo "<br />";
	}

	public function remove(Component $component) {
		echo "葉節點不可移除子節點";
		echo "<br />";
	}

	public function display($i) {
		for ( $j=0; $j<$i; $j++ ) {
			echo "|---";
		}

		echo $this->name;
		echo "<br />";
	}

}

?>