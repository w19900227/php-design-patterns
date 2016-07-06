<?php
include_once "DbConnFactory.php";
// include_once "conn/MySqlConn.php";
// include_once "conn/MySqlConn.php";

class SqlFactory extends DbConnFactory {
	protected function factoryMethod(DbConn $factory) {
		$factory->conn();
		$factory->crud();
	}
}

?>