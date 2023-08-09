<?php

/* Splice é utilizado para remover e adicionar itens do array diretamente*/

$array = ['a','b','c','d','e','f','g'];

array_splice($array, 1/* posição inicial */, 3 /* quantidade de elementos para remover */, 'k' /*
no quarto parametro o splice adiciona um elemento considerando os primeiros comandos */);

print_r($array);

?>