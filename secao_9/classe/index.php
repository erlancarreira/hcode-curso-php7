<?php 

class Pessoa {

	public $nome; //Atributo

	public function falar() //Metodo
	{
        return "O meu nome é: $this->nome";
	}

}

$fulano = new Pessoa();
$fulano->nome = "Fulano da Silva";
echo $fulano->falar();