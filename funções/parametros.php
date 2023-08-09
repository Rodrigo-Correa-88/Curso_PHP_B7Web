<?php
/*
Parametros são variáveis usadas no escopo da função 
 */
function somar (int $n1, int $n2, int $n3 = 2/* parametros */) {
    $total = $n1 + $n2 + $n3;
    return $total;
}

$x = somar(4,5); 
$y = somar(5,3);
$w = somar($x, $y);

echo "$w";