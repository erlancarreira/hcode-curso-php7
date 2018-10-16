<?php 
require_once("config.php");

use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Djalma Sindeaux");
$cad->setEmail("djalmasindeaux@hotmail.com");
$cad->setSenha("1234567890");

$cad->registerSell();
?>