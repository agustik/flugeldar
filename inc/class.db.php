<?php
class db {
	function dbConnection() {
        $db_pdo_type = DB_PDO_TYPE;
        $db_database = DB_DATABASE;
		$db_username = DB_USERNAME;
		$db_password = DB_PASSWORD;
		$db_server	 = DB_SERVER;

        $pdo_dsn = ""
            . $db_pdo_type . ":"
            . "host=" . $db_server . ";"
            . "dbname=" . $db_database
            ;

        try {
            $pdo = new PDO($pdo_dsn, $db_username, $db_password);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
        return $pdo;
	}
}