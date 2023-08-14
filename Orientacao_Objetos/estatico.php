<?php

class Matematica {

    public static string $nome = "Cloud";

    public static function somar ($x, $y ) {
        return $x + $y;
    }

}


/* :: faz referêmcia a classe assim podendo usar a função dentro da classe */
echo Matematica::somar(25,35);
echo "\n";
echo Matematica::$nome;