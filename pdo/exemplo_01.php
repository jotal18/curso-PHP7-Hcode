<?php
$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM  tb_usuarios ORDER BY deslogin");

$stmt->execute();

$results = $stmt->fetchAll(PDO:: FETCH_ASSOC);
//var_dump($results);

foreach ($results as $row) {
	foreach ($row as $key => $value) {

		if ($key === "deslogin") {
			echo $key . " " . $value . "<br/>";	
		}
		
	}	
}




?>