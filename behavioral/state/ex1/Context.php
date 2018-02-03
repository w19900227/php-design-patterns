<?php

class Context {
	private $offState;
	private $onState;
	private $currentState;

	public function __construct()
	{
		$this->offState = new OffState($this);
		$this->onState = new OnState($this);
		$this->currentState = $this->offState;
	}

	public function turnOnLight()
	{
		echo 'Now state: ' . $this->getStatus() . '<br />';
		$this->currentState->turnLightOn();
		echo 'After state : ' . $this->getStatus() . '<br />';
		echo '<hr />';
	}

	public function turnOffLight()
	{
		echo 'Now state : ' . $this->getStatus() . '<br />';
		$this->currentState->turnLightOff();
		echo 'After state : ' . $this->getStatus() . '<br />';
		echo '<hr />';
	}

	public function setState(IState $state)
	{
		$this->currentState = $state;
	}

	public function getOnState()
	{
		return $this->onState;
	}

	public function getOffState()
	{
		return $this->offState;
	}

	public function getStatus()
	{
		return $this->currentState->getStatus();
	}

}

?>