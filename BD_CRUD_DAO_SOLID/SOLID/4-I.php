<?php
/* Princípio de Segregação de interface 

    define que em uma interface deve-se ter somente 
    os métodos essenciais para o uso da classe que a
    interface implementa. 
*/

 interface Aves {
    public function setLocation( $lat, $lng);
    public function render();
}

interface AvesQueVoam extends Aves {
    public Function setAltitude($alt);
}

class Papagaio implements AvesQueVoam {
    public function setLocation( $lat, $lng) {}
    public function render() {}
    public Function setAltitude($alt) {}
}

class Pinguin implements Aves {
    public function setLocation( $lat, $lng) {}
    public function render() {}
}
