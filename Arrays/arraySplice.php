<?php

$frutas = [
    "Batata",
    "Maçã",
    "Pêra",
    "Feijão",
    "Arroz"
];

$listaFormatada = array_splice($frutas, 2, 2);

print_r($listaFormatada);
echo '<br>';
print_r($frutas);