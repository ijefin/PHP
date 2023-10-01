<?php

$pessoa = [
    "nome" => "Jefferson Gomes",
    "idade" => 25,
    "profissao" => "Medium Lane Developer",
];

$existeNome = array_key_exists("nome",$pessoa);

if($existeNome){
    echo "A chave existe <br>";
}else{
    echo "A chave não existe!";
}

// if(array_key_exists("cpf",$pessoa)){
//     echo "A chave existe <br>";
// }else{
//     echo "A chave não existe! <br>";
// }

if(isset($pessoa["nome"])){
    echo "A key existe";
}else{
    echo "A key não existe";
}