<?php 

/**
 * 
 */
namespace Cliente;

class Cadastro extends \Cadastro 
{
	public function registerSell() {
        echo "Foi registrada uma venda para o cliente ".$this->getNome();
	}
}