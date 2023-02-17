<?php

require 'bibliotecas/lib1/lib1.php';
require 'bibliotecas/lib2/lib2.php';

//adicionei um apelido a Cliente da classe B como C1
use B\Cliente as C1; // Usar a classe cliente dentro do Namespace B q esta dentro da lib 2
use A\Cliente;

$c = new C1();

print_r($c);


echo $c->__get('nome');
?><!-->