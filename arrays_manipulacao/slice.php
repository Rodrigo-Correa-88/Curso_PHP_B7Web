<?php

$array = ['a','b','c','d','e','f','g'];


/* Slice corta o array e cria um array novo */

$retorno  = array_slice($array, 1/* posição inicial */ , 4/* quantos itens são selecionados */ );

print_r($retorno)

?> 