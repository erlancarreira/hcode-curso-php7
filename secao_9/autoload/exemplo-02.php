<?php 

function includeClass($nameClass){
    if (file_exists($nameClass.'.php') === true) {
        require_once($nameClass.'.php');
    }
}

spl_autoload_register("includeClass");

spl_autoload_register(function($nameClass) {
	if(file_exists("Abstratas". DIRECTORY_SEPARATOR .$nameClass.".php") === true) {
		require_once("Abstratas". DIRECTORY_SEPARATOR .$nameClass.".php");
	}
});

$carro = new DelRey();

$carro->acelerar(80);