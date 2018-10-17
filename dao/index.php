<?php 

require_once("config.php");

// $root = new Usuario();

// $root->loadById(6);

// echo $root;

// $lista = Usuario::getList();

// echo json_encode($lista);

// $lista = Usuario::search('j');

// echo json_encode($lista);

$usuario = new Usuario();

$usuario->login("root", '!@#$');

echo $usuario;