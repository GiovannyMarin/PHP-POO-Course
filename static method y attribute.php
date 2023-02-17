<?php

class Exemplo
{
    public static $atributo1 = 'eu sou um atributo estatico';
    public $atributo2 = 'eu sou um atributo normal';

    public static function metodo1()
    {

        echo 'eu sou um metodo estatico';
    }

    public function metodo2()
    {

        echo 'eu sou um metodo normal';
    }
}

//quando esta trabalhando com metodos ou atributos estaticos n existe a necessidade
//de instanciar eles, como fazemos $x = new Exemplo() 

$x = new Exemplo();
// uzamos NOMEDACLASSE::NOMEDOBAGUISTATIC
/*
echo Exemplo::$atributo1;
echo '<br>';
Exemplo::metodo1();
*/

#echo $x->$atributo1;
// isso acima n funciona pq eh static 

//n esta acessivel pelo ->
//n podemos usar o this

?><!-->