<?php

$dados = [
    "nome" => "Jefferson",
    "idade" => 25,
    "cpf" => "17943790707"
];

extract($dados);

echo "$nome <br>";
echo "$idade <br>";
echo "$cpf <br>";
// posso extrair chaves de um array usando o extract