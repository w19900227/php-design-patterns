<?php

include_once "Iterator.php";

class ConcreteIterator implements Iterators {
	private $list = array();
	private $index = 0;

	public function ConcreteIterator($list) {
		$this->list = $list;
	}

	public function next() {
		return $this->hasNext() ? $this->list[$this->index++] : null;
	}

	public function hasNext() {
		return $this->index < count($this->list);
	}
}

?>