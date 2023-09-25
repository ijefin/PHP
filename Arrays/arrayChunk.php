<?php

$itens = range(1, 20);
$teste = array_chunk($itens, 10);
print_r($teste);