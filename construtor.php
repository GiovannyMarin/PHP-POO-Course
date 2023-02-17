<?php

class Pessoa
{
    public $nome = null;

    function __construct($nome)
    {
        echo 'Objeto iniciado';
        $this->nome = $nome;
    }

    function __destruct() // executado quando o objeto eh destruido ou apos a interp do script
    {
        echo 'objeto removido';
    }

    function __get($att)
    {
        return $this->$att;
    }

    function correr()
    {
        return $this->__get('nome') . 'esta correndo';
    }
}


$pessoa = new Pessoa('Jorge');

?><!-->