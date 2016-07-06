<?php

include_once "DbConn.php";

class MySqlServerConn implements DbConn {
	public function conn() {
		echo "連線至My Sql Server資料庫";
		echo "<br />";
	}
	public function crud() {
		echo "於My Sql Server資料庫進行CRUD";
		echo "<br />";
	}
}

?>