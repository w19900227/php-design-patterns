<?php
include_once "director/Director.php";
include_once "machines/MacBookProBuilder.php";
include_once "machines/IPadBuilder.php";

$mac_director = new Director(new MacBookProBuilder());
$macBookPro = $mac_director->createComputer();
echo $macBookPro;

echo "<hr />";

$ipad_director = new Director(new IPadBuilder());
$macBookPro = $ipad_director->createComputer();
echo $macBookPro;

?>