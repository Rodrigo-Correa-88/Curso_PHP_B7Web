<?php

/* gera um array de uma sequencia definida pelos parâmetros */

$array1 = array(1,2,20);
foreach ($array1 as $item) {
    echo "\n $item";
}

/* parametros não precisam estar em ordem crescente */
$array2  = range(10,1);
foreach ($array2 as $num) {
    echo "\n $num";
}


?>