<?php

//para n existir conflito de nomes, utilizamos namespaces
namespace A;

class Cliente implements CadastroInterface
{
    public $nome = 'Jorge';
    public function __get($attr)
    {
        return $this->$attr;
    }

    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
    }

    public function salvar()
    {
        echo 'salvar';
    }
}

interface CadastroInterface
{
    public function salvar();
}

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

// acessando o namespace A para criar um cliente dentro desse namespace
$c = new \B\Cliente();
print_r($c);
echo $c->__get('nome');

?><!-->