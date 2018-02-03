<?php

include_once "DbConnFactory.php";

$factory = new DbConnFactory();

$mysql = $factory->createDbConn("MySqlServerConn");
$mysql->conn();
$mysql->crud();


$sql_server = $factory->createDbConn("SqlServerConn");
$sql_server->conn();
$sql_server->crud();

?>