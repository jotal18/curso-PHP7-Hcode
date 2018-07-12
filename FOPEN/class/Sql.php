<?php

class Sql extends PDO{

	private $conn;

	public function __construct(){

		$this->conn = new PDO ("mysql:host=localhost;dbname=dbphp7", "root", "");
	}


	private function setParams($stmt, $params = array()){
		
		foreach ($params as $key => $value) {
			$this->setParam($stmt, $key, $value);
		}

	}

	private function setParam($stmt, $key, $value){

		$stmt->bindParam($key, $value);
	}


	public function query($rawQuey, $params = array()){

		$stmt = $this->conn->prepare($rawQuey);
		$this->setParams($stmt, $params);
		$stmt->execute();
		return $stmt;

	}

	public function select($stmt, $params = array()) : array
	{
		
		$stmt = $this->query($stmt, $params);

		return $stmt->fetchAll(PDO:: FETCH_ASSOC);
	}


}

?>