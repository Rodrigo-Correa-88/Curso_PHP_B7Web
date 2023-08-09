<?php

/*São funções simplificadas */

// $dizimo = function ($valor) {
//     return $valor * 0.1;
// };


$dizimo = fn($valor) => $valor * 0.1;

echo $dizimo(132);
?>