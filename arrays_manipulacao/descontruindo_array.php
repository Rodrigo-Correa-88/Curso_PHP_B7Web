<?php

$array = ['Cloud', 90, 'café', 'azul'];

// $nome = $array[0];
// $idade = $array[1];
// $bebida = $array[2];
// $cor = $array[3];

list(
    $nome,
    $idade,
    $bebida,
    $cor
) = $array;

echo $nome . " tem " . $idade . " anos e gosta de tomar " .$bebida .  " com a cor " . $cor;
echo "\n";

$array2 = [
    'nome2' => 'tifa',
    'idade2' => 90 ,
    'bebida2' => 'suco',
    'cor2' => 'azul'];

extract($array2);

echo $nome2 . " " . $idade2 . " " . $bebida2;




?>