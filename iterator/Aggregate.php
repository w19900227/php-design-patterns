<?php

interface Aggregate {
	public function add($o);
	public function remove($o);
	public function iteratore();
}

?>