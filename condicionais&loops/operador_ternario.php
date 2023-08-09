<?php


$idade = 18;
if ($idade <18) {
     echo "Menor de idade";
} else {
    echo "Maior de idade";
};

/*
    Sintaxe do operador ternário
    (condição) ? resultado true : resultado false
*/

$idade = 14;
$ternario = ($idade <18) ? "Menor de idade" : "Maior de idade";

echo "\n$ternario";

