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

    //getter e setter
    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function setNumFilhos($numFilhos)
    {
        $this->numFilhos = $numFilhos;
    }

    function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    function getNome()
    {
        return $this->nome;
    }
    function getNumFilhos()
    {
        return $this->numFilhos;
    }
    function getTelefone()
    {
        return $this->telefone;
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
$y->setNome('Jose');
$y->setNumFilhos(8);
echo $y->resumirCadFunc();
$x = new Funcionario();

?><!-->