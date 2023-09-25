<?php

//variáveis comuns armazenam o valor apenas até o fim da execução;
function show()
{
    $counter = 0;
    $counter++;
    echo "$counter <br>";
}

//variáveis staticas armazenam o valor até a próxima alteração;
function showStatic()
{
    static $counter = 0;
    $counter++;
    echo "$counter <br>";
}

show();
show();
show();
show();

showStatic(); 
showStatic(); 
showStatic(); 
showStatic(); 