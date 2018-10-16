<?php 

interface Veiculo 
{
    public function acelerar($velocidade);
    public function frenar($frenar);
    public function trocarMarcha($marcha);
}

class Civic implements Veiculo
{
    public function acelerar($velocidade) 
    {
        echo " O veiculo acelorou ate $velocidade km/h";
    }

    public function frenar($frenar) 
    {
        echo " O veiculo frenou ate $frenar km/h";
    }

    public function trocarMarcha($marcha) 
    {
        echo "O veiculo engatou a marcha $marcha";
    }
}

$carro = new Civic();

$carro->trocarMarcha(1);
