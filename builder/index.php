<?php
include_once "Director.php";
include_once "machines/MacBookProBuilder.php";
include_once "machines/IPadBuilder.php";

$director1 = new Director(new MacBookProBuilder());
$macBookPro = $director1->createComputer();
echo $macBookPro;

echo "<hr />";

$director1 = new Director(new IPadBuilder());
$macBookPro = $director1->createComputer();
echo $macBookPro;

?>