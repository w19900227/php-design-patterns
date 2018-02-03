<?php

abstract class IFood {
	protected $StoreName;
	abstract public function getDescription();
	abstract public function setStoreName($StoreName);
	abstract public function getStoreName();
	abstract public function getCostDetail();
	abstract public function getCost();
}

?>