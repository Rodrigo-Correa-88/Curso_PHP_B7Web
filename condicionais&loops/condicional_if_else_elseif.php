<?php

/*A condicional "if" é uma estrutura de controle utilizada em programação e 
lógica para tomar decisões com base em condições específicas*/

//Exp

/*
Se a idade for maior que 18 anos Então
-Mostrar na tela maior de 18
Caso contrario
-Mostrar na tela menor de 18 anos
*/  

$idade = 17;
// A tradução livre do if e "Se"
if ($idade >= 18) {
    echo "É maior de 18 anos.";
} else {                        // tradução livre de else é "senão"
    echo "É menor de 18 anos\n";
};

$acertos = 0;

if ($acertos >= 8) {
    echo "Nota A";
} elseif ($acertos >= 5 && $notas <= 7  ) {
    echo "Notas B";
} else if ($acertos < 5 && $acertos >= 0) {
    echo "Nota C";
}