<?php

include_once "LightCommand.php";

class LightTurnOnCommand extends LightCommand
{
	public function execute()
	{
		echo $this->lightCommandee->turnOn();
	}
}

?>