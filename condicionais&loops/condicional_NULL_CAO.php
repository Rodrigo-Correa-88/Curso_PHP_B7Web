<?php 

$nome = 'Cloud';

$nomeCompleto = $nome;
$nomeCompleto .= isset($sobrenome) ? $sobrenome : '';


// Simplificação de um condicional ternário
$nomeCompleto .= $sobrenome ??/* utiliza a variável caso ela seja verdadeira */ '' /* ação caso a variável seja falsa */;


echo $nomeCompleto;










?>