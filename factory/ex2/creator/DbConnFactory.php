<?php

abstract class DbConnFactory {
	protected abstract function factoryMethod();
	public function startMethod() {
		return $this->factoryMethod();
	}
}

?>