<?php 

	require_once("config.php");

	//$usuario = new Usuario();
	//$usuario->loadById(1);
	//	echo $usuario;

	//Carrega uma Lista de Usuários

	//$lista = Usuario::getList();
	//echo json_encode($lista);

	//Carrega uma lista de usuários buscando pelo login

	//$search = Usuario::search("te");
	//echo json_encode($search);

	//Carrega um usuário usando o login e a senha
	$usuario = new Usuario();
	$usuario->login("carlos","123456");

	echo $usuario;




 ?>