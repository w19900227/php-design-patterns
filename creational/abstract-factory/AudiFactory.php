<?php
include_once "sportscar/AudiSportsCar.php";
include_once "sedan/AudiSedan.php";
include_once "AbstractFactory.php";

class AudiFactory implements AbstractFactory {
	public function buildSedan() {
		return new AudiSedan();
	}
	
	public function buildSportsCar() {
		return new AudiSportsCar();
	}
}
?>