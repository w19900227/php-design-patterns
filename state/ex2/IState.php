<?php

interface IState {
	public function getStatus();
	public function turnNext();
	public function turnLast();
}

?>