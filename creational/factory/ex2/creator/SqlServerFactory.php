<?php
include_once "DbConnFactory.php";
include_once "conn/SqlServerConn.php";

class SqlServerFactory extends DbConnFactory {
	protected function factoryMethod() {
		$conn = new SqlServerConn();
		$conn->conn();
		$conn->crud();
	}
}

?>