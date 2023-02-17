<?php

class Carro extends Veiculo
{
    public $teto_solar = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }


    function abrirTetoSolar()
    {
        echo 'abrir teto solar';
    }
}

class Moto extends Veiculo
{
    public $contraPesoGuidao = true;

    function __construct($placa, $cor)
    {
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function empinar()
    {
        echo 'empinei';
    }
}

class Veiculo
{
    public $placa = null;
    public $cor = null;

    function acelerar()
    {
        echo 'Acelerar';
    }
}

$carro = new Carro('AS123', 'Azul');
$moto = new Moto('ASD124', 'Verde');

echo '<pre>';
print_r($carro);
print_r($moto);
echo '<pre>';

?><!-->