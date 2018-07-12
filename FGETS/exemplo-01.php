<?php

$filename = "usuarios.csv";

if (file_exists($filename)) {
	
	$file = fopen($filename, "r");

	$headers = explode(",", fgets($file));

	print_r($headers);

	$data = array();

	while ($row = fgets($file)) {
		
		$rowData = explode(",", $row);
		//print_r($rowData);
		$linha = array();
		for ($i=0; $i < count($headers); $i++) { 
			$linha[$headers[$i]] = $rowData[$i];
		}	
		//print_r($linha);
		array_push($data, $linha);
	}
	
	print_r($data);

	fclose($file);

	echo json_encode($data);
}

?>