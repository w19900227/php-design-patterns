<?php

include_once "Aggregate.php";
include_once "ConcreteIterator.php";


class ConcreteAggregate implements Aggregate {

	private $list = array();
	public function add($o) {
		array_push($this->list, $o);
	}

	public function remove($o) {
		unset($this->list[$o]);
	}

	public function iteratore() {
		return new ConcreteIterator($this->list);
	}
}

?>