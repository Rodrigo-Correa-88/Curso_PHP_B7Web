<?php

/* toda a variavel em php começa com o simbolo de $ */

$x = 10;
echo $x + 2;

// variáveis não podem ter espaços e nem caraxteres especiais

$numeros = 45;

/* nomes de variaveis em estilo camelCase são aqueles em que a primeira palavra
começa com a letra minuscala e as proximas palavras com letra maiuscula */

$valorTotalDaSoma = $x + $numeros;
echo "\n" . $valorTotalDaSoma;

// strings são referentes a textos.

$nome = "Cloud"; // string devem ficar entre aspas simples ou duplas
$nome2 = 'Tifa'; // string devem ficar entre aspas simples ou duplas
echo "\n$nome ,$nome2";

/*Em PHP quando colocamos aspas simples,
  significa que o PHP não precisa interpretar nada,
  ele vai considerar tudo como texto. 
  Porém, quando é usado aspas duplas, o PHP entende que haverá algo 
  que ele deve interpretar como: variáveis, caracteres especiais e etc.*/

//Pode armazenar valores de verdadeiro ou falso (Boolean)
$verdade = true;
$mentira  = false;

// Poemos armazenar o valor vazio null
$vazio = null;
