<?php
include_once "conn/MySqlConn.php";
include_once "conn/SqlServerConn.php";

class DbConnFactory {
	public function createDbConn($class_name) {
		try {
			return new $class_name();
        } catch (Exception $e) {
            echo "DbConn建立失敗";
            
        }
		return null;
	}
}

?>