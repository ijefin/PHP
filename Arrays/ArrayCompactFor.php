<?php

$marca = "bmw";
$modelo = "GS";
$tipo = "moto";
$cilindradas = "310";
$estilo = "GS";

$carro = compact("marca", "modelo", "tipo", "cilindradas", "estilo");
foreach ($carro as $chave => $valor) {
    echo "$chave : $valor <br>";
}