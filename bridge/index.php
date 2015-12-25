<?php
include_once "os/OSX.php";
include_once "os/Windows.php";
include_once "machines/Asus.php";
include_once "machines/Mac.php";
include_once "machines/Msi.php";

$osX = new OSX();
$windows = new Windows();

$mac = new Mac($osX);
$mac->powerOn();
$mac->doSomething();
$mac->powerDown();

$asus = new Asus($windows);
$asus->powerOn();
$asus->doSomething();
$asus->powerDown();

$msi = new Msi($windows);
$msi->powerOn();
$msi->doSomething();
$msi->powerDown();

?>