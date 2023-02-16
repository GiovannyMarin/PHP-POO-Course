<?php

//modelo

class Funcionario
{
    //atributos

    public $nome = 'Jose';
    public $telefone = null;
    public $numFilhos = 2;

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
echo $y->modificarNumFilhos(8);
echo $y->resumirCadFunc();

?><!-->