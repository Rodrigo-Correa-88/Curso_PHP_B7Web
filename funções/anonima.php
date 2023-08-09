<?php

/* quando se cria uma função dentro de uma variável */

$dizimo = function(int $valor) {
    return $valor * 0.1;
};


/* pode-se colocar dentro de outras variáveis */

$funcao = $dizimo;

echo $funcao(90);
echo "\n";
echo $dizimo(82);

?>