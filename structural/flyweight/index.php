<?php

include_once "FlyweightFactory.php";

$flyweight_factory = new FlyweightFactory();

for ( $i=0; $i<5; $i++ ) {
	$flyweight = $flyweight_factory->buildFlyweight();
	$conn = $flyweight->getConn();
	echo $conn;
	echo "<br />";
}

?>