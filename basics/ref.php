<?php

$x = 6;

$y = &$x;

$y = 5;

echo $x . "<br>";
echo $y;