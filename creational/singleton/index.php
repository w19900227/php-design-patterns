<?php

include_once "Singleton.php";

$singleton = new Singleton();
$singleton->init();
$instance = $singleton->getInstance();
echo $instance->display();

?>