<?php

$lista_de_listas = [
    ["Carlos", "Pedro", "João", "Marcelo"],
    ["Carro", "Avião", "Navio", "Bicicleta"],
    ["Pão", "Leita", "Farinha", "Ovo"]
];

for ($adrielly = 0; $adrielly < count($lista_de_listas); $adrielly++) {
    for ($jefferson = 0; $jefferson < count($lista_de_listas[$adrielly]); $jefferson++) {
        echo $lista_de_listas[$adrielly][$jefferson];
        echo '<br>';
        if($jefferson == 3){
            echo "mudando de array";
            echo '<br>';
        }
    }
};

function nariz($param){
    echo $param;
}

nariz("Algum texto!");