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

    function trocarMarcha()
    {
        echo 'desengatar com a mao e engatar com o pe';
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

    function trocarMarcha()
    {
        echo 'desengatar embreagem com o pe e engatar com a mao';
    }
}

$carro = new Carro('AS123', 'Azul');
$moto = new Moto('ASD124', 'Verde');

$carro->trocarMarcha();
echo '<br>';
$moto->trocarMarcha();

?><!-->