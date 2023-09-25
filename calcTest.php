<?php

$stringFive = "5";

$numberTwelve = 12;

echo $stringFive * $numberTwelve;
echo "<br>";
echo getType($stringFive * $numberTwelve);

$idade = 15;

$idade2 = 18;

$macaco = true;

if (($idade >= 18 || $idade2 >= 18) && $macaco) {
    echo "Tudo certo! Aprendeu bem.";
}

$teste = (int) '125';

if ($teste === 125) {
    echo "SIM";
}

$teste25 = (int) false                          ;

echo $teste25;