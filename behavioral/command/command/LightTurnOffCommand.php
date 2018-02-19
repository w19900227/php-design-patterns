<?php

include_once "LightCommand.php";

class LightTurnOffCommand extends LightCommand
{
	public function execute()
	{
		echo $this->lightCommandee->turnOff();
	}
}

?>