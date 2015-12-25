<?php
include_once "BmwFactory.php";
include_once "AudiFactory.php";

$factory =  new BmwFactory();

$sedan = $factory->buildSedan();
$sedan->work();

$sedan = $factory->buildSportsCar();
$sedan->competition();



$factory2 =  new AudiFactory();

$sedan2 = $factory2->buildSedan();
$sedan2->work();

$sedan2 = $factory2->buildSportsCar();
$sedan2->competition();


?>