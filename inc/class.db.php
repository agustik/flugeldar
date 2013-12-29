<?php


class db {
	private function dbConnection() {
		include_once('config.php');
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
		$result = false;
		try {
			$db = $this->dbConnection();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT * FROM  `vorur` WHERE type = :type";
			$stmt = $db->prepare($query);
	        $stmt->bindParam(':type', $type, PDO::PARAM_STR);
	        $stmt->execute();
	        $result = array();

			/*while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
			    $result[] = $row; 
			}*/
			while($row = $stmt->fetch()) {
		        print_r($row);
		    }
			$db = null;
			return $result;
		}catch (PDOException $e) {
			echo "Error " . $e->GetMessage();
            $db = null;
            die();
		}
	}
	public function GetUtkoll(){
		$result = false;
		try {
			$db = $this->dbConnection();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT * FROM `utkoll`";
			$stmt = $db->prepare($query);
            $stmt->execute();
			$result = array();
			/*while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
			    $result[] = $row; 
			}*/
			while($row = $stmt->fetch()) {
		        print_r($row);
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