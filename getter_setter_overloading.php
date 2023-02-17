<?php

//modelo

class Funcionario
{
    //atributos

    public $nome = null;
    public $telefone = null;
    public $numFilhos = null;
    public $cargo = null;
    public $salario = null;

    //getter e setter (overloading)

    function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

    function __get($atributo)
    {
        return $this->$atributo;
    }

    //metodos

    function resumirCadFunc()
    {
        return "$this->nome possui $this->numFilhos filhos";
    }

    function modificarNumFilhos($num)
    {
        //afetar atributo de um obj
        $this->numFilhos = $num;
    }
};

$y = new Funcionario();
$y->__set('nome', 'Giovanny');
$y->__set('nome', 'Ryan');
echo $y->__get('nome');
$x = new Funcionario();

?><!-->