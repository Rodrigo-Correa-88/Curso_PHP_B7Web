<?php

$array = [
    'nome' => 'Cloud',
    'idade' => 26,
    'jogo' => 'Final Fantasy VII',
    'cor' => 'Azul',
    'profissao' => 'Soldado'
];
 
if (key_exists('idade',$array)) {
    echo 'true';
} else {
    echo 'false';
}



?>