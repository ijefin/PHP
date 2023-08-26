<?php

$moto = [
    "Modelo" => "Cb 500x",
    "Marca" => "Honda",
    "Ano" => 2024,
    "Cilindradas" => 500,
    "Estilo" => "Big Trail"
];

$chaves = array_keys($moto);
print_r($chaves);
echo $chaves[0];

$valores = array_values($moto);
print_r($valores);
echo $chaves[0];