<?php 

require_once("config.php");
//Carrega um usuario
// $root = new Usuario();
// $root->loadById(6);
// echo $root;

//Carrega uma lista de usuarios
// $lista = Usuario::getList();
// echo json_encode($lista);
// $lista = Usuario::search('j');
// echo json_encode($lista);

// Carrega uma lista de usuarios buscando pelo login
// $usuario = new Usuario();
// $usuario->login("root", '!@#$');
// echo $usuario;

// Cria um novo usuario
// $aluno = new Usuario("Fulano", 'senha123');
// // $aluno->setDeslogin("aluno");
// // $aluno->setDessenha("lasdas2656");
// $aluno->insert();
// echo $aluno;

// Alterando um usuario por id
// $usuario = new Usuario();
// $usuario->loadById(9);
// $usuario->update("Professor", "1dwqd123");
// echo $usuario;

$usuario = new Usuario();

$usuario->loadById(9);
$usuario->delete();

echo $usuario;