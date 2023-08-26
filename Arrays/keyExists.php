<?php

$pessoa = [
    "nome" => "Jefferson Gomes",
    "idade" => 25,
    "profissao" => "Medium Lane Developer",
];

if(array_key_exists("nome",$pessoa)){
    echo "A chave existe <br>";
}else{
    echo "A chave não existe!";
}

// if(array_key_exists("cpf",$pessoa)){
//     echo "A chave existe <br>";
// }else{
//     echo "A chave não existe! <br>";
// }