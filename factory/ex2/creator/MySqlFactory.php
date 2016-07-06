<?php
include_once "DbConnFactory.php";
include_once "conn/MySqlConn.php";

class MySqlFactory extends DbConnFactory {
	protected function factoryMethod() {
		$conn = new MySqlServerConn();
		$conn->conn();
		$conn->crud();
	}
}

?>