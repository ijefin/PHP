<?php

$teste = [];

$teste[0] = "Macaco";
print_r( $teste[0]);
echo '<br>';

$teste[1] = "Pedro";
print_r( $teste[1]);
echo '<br>';

$teste[2] = "Carlos";
print_r( $teste[2]);
echo '<br>';

$teste[3] = "João";
print_r( $teste[3]);
echo '<br>';

$teste[4] = 12;
print_r( $teste[4]);
echo '<br>';

$teste[4] += 18;
print_r( $teste[4]);
echo '<br>';

$arrayAssoc = [];

$arrayAssoc["carro"] = "bmw"; //serve para criar um array chave => valor, semelhante a objetos em JS. É possível apenas replicar um novo valor àquela chave.
print_r($arrayAssoc);
echo '<br>';

$arrayAssoc["avião"] = "boeing"; 
print_r($arrayAssoc);
echo '<br>';

$arrayAssoc["avião"] = "F55"; 
echo '<br>';
print_r($arrayAssoc);




