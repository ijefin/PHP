<?php

$x = 5;

echo $x . "Global";
function teste()
{
    $x = 10;
    echo $x . "Local";
}

teste();

//

$teste = "macaco <br>";

echo $teste;

if (5 > 2) {
    $teste = "macaco2";

    echo $teste;
}

function funcao()
{
    global $teste;

    $teste = "mudei meu valor, pois fui invocado com o global";

    echo $teste;
}

funcao();


