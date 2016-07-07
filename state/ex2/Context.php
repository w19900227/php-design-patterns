<?php

class Context {
	private $currentState;
	private $onState;
	private $offState;
	private $brighterLight;
	private $brightestLight;

	
	public function __construct() {
		$this->onState        = new OnState($this);
		$this->offState       = new OffState($this);
		$this->brighterLight  = new BrighterLight($this);
		$this->brightestLight = new BrightestLight($this);

		$this->currentState = $this->onState;
	}

	public function next() {
		$this->currentState->turnNext();
	}

	public function last() {
		$this->currentState->turnLast();
	}

	public function setState(IState $state) {
		$this->currentState = $state;
	}

	public function getOnState() {
		return $this->onState;
	}

	public function getOffState() {
		return $this->offState;
	}

	public function getBrighterLight() {
		return $this->brighterLight;
	}

	public function getBrightestLight() {
		return $this->brightestLight;
	}
}

?>