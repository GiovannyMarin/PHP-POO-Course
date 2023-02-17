<?php

class MeuErroCostumizado extends Exception
{
    private $erro = '';

    public function __construct($erro)
    {
        $this->erro = $erro;
    }

    public function exibirMsgErro()
    {
        return $this->erro;
    }
}

try {
    throw new MeuErroCostumizado('esse eh um erro teste');
} catch (MeuErroCostumizado $e) {
    echo '<p style="color: red"> ' . $e->exibirMsgErro() . '</p>';
}

//Error(php)
//Exception ( programadores)
//Customizadas (programadores)


?><!-->