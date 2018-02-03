<?php

interface Builder {
	public function setMb();
	public function setPower();
	public function setCpu();
	public function setRam();
	public function setHdd();
	public function setVga();
	public function buildComputer();
}
?>