<?php

$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
	echo "Erro: " . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (?,?)");
$stmt->bind_param("ss", $login, $pass);
$login = "teste";
$pass = 12345555;
$stmt->execute();
$login = "cachorro";
$pass = "1234555sasasa5";
$stmt->execute();


?>