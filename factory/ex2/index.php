<?php

include_once "creator/MySqlFactory.php";
include_once "creator/SqlServerFactory.php";

$mySqlFactory = new MySqlFactory();
$mySqlFactory->startMethod();


$sqlServerFactory = new SqlServerFactory();
$sqlServerFactory->startMethod();

?>