<?php

$personagem =[
    'nome' => 'Cloud',
    'idade' => '28',
    'atributos' => [
        'forca' => 60,
        'agilidade' => 80,
        'destreza' => 50,
    ],
    'vida' => 1000,
    'mana' =>928,
];

echo "\nNome: " . $personagem['nome'];
echo "\nForça: ". $personagem['atributos']['forca'];
echo "\nVida: " . $personagem['vida'];




?>