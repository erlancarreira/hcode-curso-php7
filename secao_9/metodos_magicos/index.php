<?php 

class Endereco 
{
	private $logradouro;
	private $numero;
	private $cidade;

	public function __construct($a, $b, $c) 
	{ 
        $this->logradouro = $a;
        $this->numero = $b;
        $this->cidade = $c;  
	}

	public function __destruct()
	{
		// var_dump("\n DESTRUIR ");
	}

	public function __toString()
	{
		return "$this->logradouro,\n $this->numero,\n $this->cidade";
	}
}

$meuEndereco = new Endereco('Rua Maceio', 123, 'Fortaleza-Ce');

// var_dump($meuEndereco);

// unset($meuEndereco);

echo $meuEndereco;

