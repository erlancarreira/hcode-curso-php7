<?php 
/* 
* Exemplo 1
*/
class Pessoa 
{
	public $nome = "Rasmus Lerdorf";
	protected $idade = 48;
	private $senha = "123456";

	public function getData() 
	{
		echo "<p>$this->nome</p><p>$this->idade</p><p>$this->senha</p>";
	}
}

// $object = new Pessoa();

// echo $object->nome;

// echo $object->idade;

// echo $object->senha; 

// $object->getData();


/*
* Exemplo 2
*/


class Programador extends Pessoa 
{
	/* 
	* public herda da classe pessoa entao conseguimos acessar
	* protected herda da classe pessoa entao conseguimos acessar
	* private herda da classe pessoa mas e um metodo privado entao nao conseguimos acessar
	*/
	public function getData() 
	{
		echo get_class($this); //Mostra o nome da classe referente ao $this
		echo
		"<p>$this->nome</p>
		<p>$this->idade</p>
		<p>$this->senha</p>";
	}
	
}

$object = new Programador();

$object->getData();

