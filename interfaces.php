<?php

interface EquipamentoEletronicoInterface
{
    public function ligar();
    public function desligar();
}

//-------------------------------------------

class Geladeira implements EquipamentoEletronicoInterface
{
    public function abrirPorta()
    {
        echo 'abrir porta';
    }

    public function ligar()
    {
        echo 'Ligar';
    }

    public function desligar()
    {
        echo 'Desligar';
    }
}

class Tv implements EquipamentoEletronicoInterface
{
    public function trocarCanal()
    {
        echo 'trocar canal';
    }

    public function ligar()
    {
        echo 'Ligar';
    }

    public function desligar()
    {
        echo 'Desligar';
    }
}

$x = new Geladeira;
$y = new Tv;

//------------------ EXEMPLO 2

interface MamiferoInterface
{
    public function respirar();
}
interface TerrestreInterface
{
    public function andar();
}
interface AquaticoInterface
{
    public function nadar();
}

class Humano implements MamiferoInterface, TerrestreInterface
{
    protected function conversar()
    {
        echo 'converso';
    }

    public function respirar()
    {
        echo 'respiro';
    }

    public function andar()
    {
        echo 'andar';
    }
}

class Baleia implements MamiferoInterface, AquaticoInterface
{
    protected function esguichar()
    {
        echo 'esquicho';
    }

    public function respirar()
    {
        echo 'respiro';
    }

    public function nadar()
    {
        echo 'nado';
    }
}

//-------------------- EXEMPLO 3

interface AnimalInterface
{
    public function comer();
}

interface AveInterface extends AnimalInterface
{
    public function voar();
}


class Papagaio implements AveInterface
{
    public function voar()
    {
        echo 'voei';
    }
    public function comer()
    {
        echo 'comi';
    }
}


?><!-->