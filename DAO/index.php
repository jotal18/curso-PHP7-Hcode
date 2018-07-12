<?php

require_once("config.php");

//Carrega um usuário
//$root = new Usuario();
//$root->loadById();
//echo $root;

//Carrega uma lista de usuários
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lisa de usuário buscando pelo login
//$busca = Usuario::search("");
//echo json_encode($busca);

//Carrega um usuário usando o login e a senha
//$usuario = new Usuario();
//$usuario->login("jota", 23456);
//echo $usuario;

/*
//Criando um novo usuário
$inserir = new Usuario("asas", 4545);
$inserir->insert();
echo $inserir;
*/

/*
//Alterar o usuário
$usuario = new Usuario();
$usuario->loadById(10);
$usuario->update("xxx", 55);
echo $usuario;
*/

$usuario = new Usuario();
$usuario->loadById(10);
$usuario->delete();
echo $usuario;

?>