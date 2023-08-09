<?php

/* Uma função que utiliza ela mesma quando necessário */


function dividir ($numero) {
    $metade = $numero / 2;
    echo "\n" . $metade;

    if (round($metade) > 0) {
        dividir($metade);
    }
}

dividir(100);

?>