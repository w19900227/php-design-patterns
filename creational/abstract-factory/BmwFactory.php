<?php
include_once "sportscar/BmwSportsCar.php";
include_once "sedan/BmwSedan.php";
include_once "AbstractFactory.php";

class BmwFactory implements AbstractFactory {
	public function buildSedan() {
		return new BmwSedan();
	}

	public function buildSportsCar() {
		return new BmwSportsCar();
	}
}
?>