<?php

include_once "travel/TravelAgencies.php";

$travel_agencies = new TravelAgencies();

$travel_agencies->japanTravel();
echo "<br />";
$travel_agencies->japanFlightsAndHotel();

?>