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
		echo 'Now State : ' . $this->getStatus() . '<br />';
		$this->currentState->turnNext();
		echo 'After State : ' . $this->getStatus() . '<br />';
		echo '<hr />';
	}

	public function last() {
		echo 'Now State : ' . $this->getStatus() . '<br />';
		$this->currentState->turnLast();
		echo 'After State : ' . $this->getStatus() . '<br />';
		echo '<hr />';
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

	public function getStatus() {
		return $this->currentState->getStatus();
	}
}

?>