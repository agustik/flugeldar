<?php
class db {
	private function dbConnection() {
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

	public function GetItems($type){
		$db = $this->dbConnection();
		$query = "SELECT * FROM 'vorur' WHERE type = :type";

	}
	public function GetUtkoll(){
		$result = false;
		try {
			$db = $this->dbConnection();
			$query = "SELECT * FROM 'utkoll'";
			$sth = $db->query($query);  
			  
			# setting the fetch mode  
			$sth->setFetchMode(PDO::FETCH_ASSOC);  
			$result = array();
			while($row = $sth->fetch()) {  
			    $result = $row; 
			}
			$db = null;
			return $result;
		}catch (PDOException $e) {
			echo "Error " . $e->GetMessage();
            $db = null;
            die();
		}
	}
}