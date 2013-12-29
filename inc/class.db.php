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
            $pdo = new PDO($pdo_dsn, $db_username, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            die();
        }
        return $pdo;
	}

	public function GetItems($type, $limit = 100){
		$limit = (int)$limit;
		$result = false;
		try {
			$db = $this->dbConnection();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT * FROM `vorur` v WHERE v.type = :type LIMIT :l ";
			$stmt = $db->prepare($query);
	        $stmt->bindParam(':type', $type, PDO::PARAM_STR);
	        $stmt->bindParam(':l', $limit , PDO::PARAM_INT);
	        $stmt->execute();
	        $result = array();

			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
			    $result[] = $row; 
			}
			$db = null;
			return $result;
		}catch (PDOException $e) {
			echo "Error " . $e->GetMessage();
            $db = null;
            die();
		}
	}

	public function GetVideo($id){
		$id = (int)$id;
		$result = false;
		try {
			$db = $this->dbConnection();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT * FROM `vorur` v WHERE v.id = :id";
			$stmt = $db->prepare($query);
	        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
	        $stmt->execute();
	        $pdoresult = $stmt->fetch(PDO::FETCH_ASSOC);
	        $result = array(
                'src' => $pdoresult['src'],
                'name' => $pdoresult['name'],
                'thumbnail' => $pdoresult['thumbnail'],
                'id' => (int)$pdoresult['id'],
                'youtube' => $pdoresult['youtube'],
            );
			$db = null;
			return $result;
		}catch (PDOException $e) {
			echo "Error " . $e->GetMessage();
            $db = null;
            die();
		}
	}
	public function GetRandomItems($limit){
		$limit = (int)$limit;
		$result = false;
		try {
			$db = $this->dbConnection();
			$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$query = "SELECT * FROM `vorur` v
						ORDER BY RAND()
						LIMIT :l";
			$stmt = $db->prepare($query);
	        $stmt->bindParam(':l', $limit, PDO::PARAM_INT);
	        $stmt->execute();
	        while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
			    $result[] = $row; 
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
			$query = "SELECT u.priority, u.name, DATE_FORMAT(u.date, '%d.%m.%Y') AS is_date FROM `utkoll` as u ORDER BY u.date ASC";
			$stmt = $db->prepare($query);
            $stmt->execute();
			$result = array();
			while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {  
			    $result[] = $row; 
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