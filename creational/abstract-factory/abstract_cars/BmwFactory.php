<?php
include_once "sports/BmwSportsCar.php";
include_once "sedan/BmwSedan.php";
include_once "AbstractCars.php";

class BmwFactory implements AbstractCars {
	public function buildSedan() {
		return new BmwSedan();
	}

	public function buildSportsCar() {
		return new BmwSportsCar();
	}
}
?>