<?php

$nome = "Cloud";
$sobrenome = "Strife";
$jogo = "Final Fantasy 7";

// O "." em php concatena(junta) as variáveis.
$nomeCompleto = $nome . $sobrenome;
echo "$nomeCompleto";

// Concatenado com espaço
echo "\n" . $nome . " " . $sobrenome;

//concatenando dentro de uma string
echo "\n$nome $sobrenome";

//gerando um frase com concatenação
echo "\n$nome $sobrenome é um personagem do jogo $jogo";
