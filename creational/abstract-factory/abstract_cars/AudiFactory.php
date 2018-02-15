<?php
include_once "sports/AudiSportsCar.php";
include_once "sedan/AudiSedan.php";
include_once "AbstractCars.php";

class AudiFactory implements AbstractCars {
	public function buildSedan() {
		return new AudiSedan();
	}
	
	public function buildSportsCar() {
		return new AudiSportsCar();
	}
}
?>