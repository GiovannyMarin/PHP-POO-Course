<?php

class Pai
{
    //atributor protect e private negam o acesso a esses atributos
    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    public $humor = 'Feliz';

    public function getNome()
    {
        return $this->nome;
    } // acessando um valor private por um metodo publico

    /*
    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }
    */

    public function setNome($value)
    {
        $this->nome = $value;
    }

    public function getHumor()
    {
        return $this->humor;
    }

    private function talvezUm()
    {
        echo 'wannabe';
    }

    protected function talvezDois()
    {
        echo 'special';
    }

    public function TalvezAlguma()
    {
        $rand = rand(1, 10);

        if ($rand <= 5) {
            $this->talvezUm();
        } else {
            $this->talvezDois();
        }
    }
}

class Filho extends Pai
{ // herda atributos e metodos public e protect, PRIVATE N SAO HERDADOS
    public function __construct()
    {
        echo '<pre>';
        print_r(get_class_methods($this));
    }

    public function getAtributo($attr)
    {
        return $this->$attr;
    }
}


$pai = new Pai();
$filho = new Filho();

echo '<pre>';
print_r($filho);

echo $filho->getAtributo('humor'); // recupera pq eh public

//exibir os metodos do objeto


?><!-->