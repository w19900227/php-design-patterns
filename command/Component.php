<?php

interface Component {
	public function add(Component $component);
	public function remove(Component $component);
	public function display($i);
}

?>