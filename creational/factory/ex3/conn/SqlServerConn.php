<?php

include_once "DbConn.php";

class SqlServerConn implements DbConn {
	public function conn() {
		echo "連線至SQL Server資料庫";
		echo "<br />";
	}
	
	public function crud() {
		echo "於SQL Server資料庫進行CRUD";
		echo "<br />";
	}
}

?>