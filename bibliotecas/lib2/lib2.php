<?php

namespace B;

interface CadastroInterface
{
    public function remover();
}

class Cliente implements CadastroInterface
{
    public $nome = 'Yan';
    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
    }

    public function remover()
    {
        echo 'removi';
    }
}


?><!-->