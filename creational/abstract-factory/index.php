<?php
include_once "abstract_cars/BmwFactory.php";
include_once "abstract_cars/AudiFactory.php";

$BMW =  new BmwFactory();

$BMW_sedan = $BMW->buildSedan();
$BMW_sedan->work();

$BMW_sports = $BMW->buildSportsCar();
$BMW_sports->competition();



$Audi =  new AudiFactory();

$Audi_sedan = $Audi->buildSedan();
$Audi_sedan->work();

$Audi_sports = $Audi->buildSportsCar();
$Audi_sports->competition();


?>