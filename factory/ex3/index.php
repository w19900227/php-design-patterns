<?php

include_once "creator/SqlFactory.php";
include_once "conn/MySqlConn.php";
include_once "conn/SqlServerConn.php";

$mySqlFactory = new SqlFactory();
$mySqlFactory->doFactory(new MySqlServerConn());

$sqlServerFactory = new SqlFactory();
$sqlServerFactory->doFactory(new SqlServerConn());

?>