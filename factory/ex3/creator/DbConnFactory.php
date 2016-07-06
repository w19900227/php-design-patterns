<?php

abstract class DbConnFactory {
	protected abstract function factoryMethod(DbConn $factory);
	public function doFactory($factory) {
		return $this->factoryMethod($factory);
	}
}

?>