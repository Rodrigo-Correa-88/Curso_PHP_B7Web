<?php

/* Array e uma estrutura de dados onde se 
consegue armazenar mais de um valor dentro*/

$ingredientes = array (
    'açucar',
    'farinha',
    'ovo',
    'leite'
);
print_r($ingredientes);

// os valores do arrays são chamados de índices e sua contagem sempre começa do 0
echo "\n$ingredientes[0]"; // sintaxe para acessar os valoers do array
echo "\n$ingredientes[1]";

// outra forma de escrever um array $var = [].
$valores = [
    1,
    2,
    3,
    4,
    5,
];