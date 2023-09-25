<?php

$array = range(10, 45);

for($i = 0; $i < count($array); $i++){
    $soma = $array[$i] + 6;

    if($soma > 30){
        print_r("O número $soma é muito alto.");
        echo '<br>';
    }else{
        print_r($soma);
        echo '<br>';
    }
}

