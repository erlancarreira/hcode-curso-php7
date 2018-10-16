<?php 

class Carro {
     
    //Atributos 
	private $modelo; 
	private $motor;
	private $ano;
    
    //Metodos 
	public function getModelo() 
	{
        return $this->modelo;
	}

	public function setModelo($modelo) 
	{
        $this->modelo = $modelo;
	}

	public function getMotor():float //Necessario a versao 7 do PHP
	{
        return $this->motor;
	}

	public function setMotor($motor) 
	{
        $this->motor = $motor;
	}

	public function getAno():int //Necessario a versao 7 do PHP
	{
        return $this->ano;
	}

	public function setAno($ano) 
	{
        $this->ano = $ano;
	}

	public function exibir() 
	{
		return array(
            "modelo"=>$this->getModelo(),
            "motor"=>$this->getMotor(),
            "ano"=>$this->getAno()
		);
	}

}

$gol = new Carro();
$gol->setModelo("Gol Gt");
$gol->setMotor("1.6");
$gol->setAno("1990");

var_dump( $gol->exibir());