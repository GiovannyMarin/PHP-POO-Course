<?php

class Pai
{
    //atributor protect e private negam o acesso a esses atributos
    private $nome = 'Jorge';
    protected $sobrenome = 'Silva';
    private $humor = 'Feliz';

    public function getNome()
    {
        return $this->nome;
    } // acessando um valor private por um metodo publico

    public function __set($atributo, $valor)
    {
        $this->$atributo = $valor;
    }

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


$pai = new Pai();
echo $pai->getNome();
$pai->setNome('Yan');
echo '<br>';
echo $pai->getNome();
echo '<br>';
$pai->__set('humor', 'triste');
echo $pai->getHumor();
echo "<br>";
$pai->TalvezAlguma();

?><!-->