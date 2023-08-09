<?php

$texto = "Cloud Strife";

file_put_contents('nome.txt', $texto);

echo 'Arquivo criado com sucesso';

$addTexto = file_get_contents('nome.txt'); /* Fazer a leitura doa arquivo */

$addTexto .= ' É um personagem de jogo';

file_put_contents('nome.txt', $addTexto);