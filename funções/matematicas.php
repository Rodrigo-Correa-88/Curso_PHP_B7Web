<?php

/*
Funções Matemáticas do php
*/

/* Retorna um numero absoluto */
$numero = -8.4;
echo abs($numero);

/* Utiliza o PI */
echo "\n" . PI();

/* Arredonda para baixo */
echo "\n" . floor($numero);

/* Arredonda para cima */
echo "\n" . ceil(3.4);

/* Arredonda naturalmente */
echo "\n".round(7.4);

/* Controla casa decimais */
$valor = 12.8372498723;
echo "\n" . round($valor , 3);

/* Gerar numero aleatório */
$aleatorio = rand(0,20);
echo "\n" . $aleatorio;

/* Recebendo maior número de uma lista */
$lista = [1,4,5,6,7];
echo "\n" . max($lista);