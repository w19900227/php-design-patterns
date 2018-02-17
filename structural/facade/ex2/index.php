<?php
include_once "machines/Asus.php";
include_once "machines/Mac.php";
include_once "machines/Msi.php";

$mac = new Mac();
$mac->powerOn();
echo "<br />";

$asus = new Asus();
$asus->powerOn();
echo "<br />";

$msi = new Msi();
$msi->powerOn();

?>