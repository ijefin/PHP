<?php

echo "Teste <br>";
echo "TESTE <br>";

$teste = ["Macaco", "Hallison", "Marcos", "Fedorento"];

$associativo = [
    'nome' => 'Jeff',
    'idade' => 25,
    'profissao' => "Developer ||"
];

$nome = $associativo["nome"];
$idade = $associativo['idade'];
$profissao = $associativo['profissao'];

//echo "O funcionário $nome possui $idade e trabalha como $profissao";

if ($idade > 18) {
    echo "$nome é maior de idade";
}

if ($associativo['idade'] > 18) {
    echo $associativo['nome'] . 'é maior de idade!';
}

class Pessoa
{
    function falar()
    {
        echo "Olá!";
    }

}

$jeff = new Pessoa();
$jeff->name = "Jefferson G";
$jeff->idade = 25;

$jeff->falar();

print_r([1] == null ? "Sim" : "Não");