<?php

/* Principio Aberto-Fechado

Objetos devem estar abertas para extensão, mas 
fechadas para modificação

*/

// Exemplo 

//deve se utilizar uma interface para esse metodo

interface Remuneravel {
    public function Remuneracao();
}

class ContratoClt implements Remuneravel {
    public function Remuneracao(){
        
    }
}

class Estagio implements Remuneravel{
    public function Remuneracao(){
        
    }
}

/* dessa forma fica mais simples adicionar outro tipo de extensão para o arquivo
como outro cargo ou outra forma de pagamento já que cada uma vai ter seu tipo
específico de pagamento */

class FolhaDePagamento {
    public function calcular ( Remuneravel $funcionario) {
       return $funcionario->Remuneracao();
    }
}

/* já a classe de folha de pagamento não precisara sofrer nenhum alteração
ou seja ela será extendida e não precisara ser alterada */