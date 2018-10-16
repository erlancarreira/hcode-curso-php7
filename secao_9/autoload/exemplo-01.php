<?php 

function __autoload($nameClass) {
    
    require_once("$nameClass.php");
}

// require_once("DelRey.php");

$carro = new DelRey();

$carro->acelerar(80);