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
	//$usuario = new Usuario();
	//$usuario->login("carlos","123456");
	//echo $usuario;

	//Cria usuario com metodo construtor e chama a procedure
	//$aluno = new Usuario("carecarlito","12345");
	//$aluno->insert();
	//echo $aluno;

	//Alterar um usuario
	/*
	$usuario = new Usuario();

	$usuario->loadById(7);

	$usuario->update("professor", "12345");

	echo $usuario;
	*/

	//Deletar um Usuario
	$usuario = new Usuario();
	$usuario->loadById(7);
	$usuario->delete();
	echo $usuario;




 ?>