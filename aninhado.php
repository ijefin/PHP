<?php

$nome = "Jefferson";
$idade = 60;
$resultado = 0;

if (is_int($idade)) {
    $resultado = $idade * 2;
    if ($resultado > 100) {
        echo "É maior que 100.";
    }
}