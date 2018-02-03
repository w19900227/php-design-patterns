<?php

include_once "Travel.php";

class TravelAgencies {
	private $travel;

	public function __construct() {
		$this->travel = new Travel();
	}

	public function japanTravel() {
		$this->travel->planTrip();
        $this->travel->bookedHotel();
        $this->travel->buyFlights();
        $this->travel->bookedTransportation();
        $this->travel->buyTickets();
	}

	public function japanFlightsAndHotel() {
		$this->travel->bookedHotel();
        $this->travel->buyFlights();
	}
}


?>