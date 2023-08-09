<?php

/* Funções nativas de string */

$nome = 'Cloud';

/* Retirar espaços */
echo trim($nome);
echo "\n";

/* passar as letras para minusculas */
echo strtolower($nome);
echo "\n";

/* passar todas as letras para maisculas */
echo strtoupper($nome);
echo "\n";

/* substitui valores */
echo str_replace('Cloud', 'Tifa', $nome);
echo "\n";
echo str_replace('o', '0', $nome);
echo "\n";

/* Obter valores por posição */
echo substr($nome, 0, 3);
echo "\n";

/* Informa a posição do valor */
echo strpos($nome, 'o');
echo "\n";