<?php

$array = [
    'nome' => 'Cloud',
    'idade' => 26,
    'jogo' => 'Final Fantasy VII',
    'cor' => 'Azul',
    'profissao' => 'Soldado'
];

/* cria um array utilizando as chaves do array como valores */
$chaves = array_keys($array); 
print_r($chaves);

/* Cria um array utilizando os valores do array de parametro */
$valores = array_values($array);
print_r($valores);


?>