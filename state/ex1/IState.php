<?php 

interface IState {
	public function getStatus();	
	public function turnLightOn();	
	public function turnLightOff();	
}

?>