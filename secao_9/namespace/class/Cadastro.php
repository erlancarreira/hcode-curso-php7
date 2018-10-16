<?php 

/**
 * 
 */
class Cadastro 
{
	private $nome;
	private $email;
	private $senha;

	public function getNome():string 
	{
		return $this->nome;
	}

	public function setNome($nome):string 
	{
		return $this->nome = $nome;
	}


	public function getEmail():string 
	{
		return $this->email;
	}

	public function setEmail($email):string 
	{
		return $this->email = $email;
	}


	public function getSenha():string 
	{
		return $this->senha;
	}

	public function setSenha($senha):string 
	{
		return $this->senha = $senha;
	}

	public function __toString() {
		
		return json_encode(array( 
			"nome"=>$this->getNome(),
			"email"=>$this->getEmail(),
			"senha"=>$this->getSenha()
		));
	
	}
}