<?php

include_once "Jdbc.php";

class FlyweightFactory {
	
	private $random;
	private $cacheMap = array();

	public function FlyweightFactory() {
		for ( $i = 0; $i < 5; $i++) {
			$this->cacheMap[$i] = new Jdbc($i);
        }
	}

	public function buildFlyweight() {
		$key = rand(0, 4);
		return $this->cacheMap[$key];
	}
}

?>