<?php

class OffState implements IState
{
	private $context;

	public function __construct(Context $contextNow)
	{
		$this->context = $contextNow;
	}

	public function getStatus() 
	{
		return 'OffState';
	}

	public function turnLightOn()
	{
		echo 'Lights on!<br />';
		$this->context->setState($this->context->getOnState());
	}

	public function turnLightOff()
	{
		echo 'Light is already off -> take no action<br />';
	}
}

?>