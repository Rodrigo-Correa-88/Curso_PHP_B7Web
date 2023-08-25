<?php

/* 
S - Single Responsibility Principe
O - Open-Close Principe
L - Liskov Substitution Principe
I - Interface segregation Principe
D - Dependenci Inversion Principe
*/


/* Principio da Responsabilidade Única

    É onde cada classe teve ter uma única responsabilidade, como
    no exemplo.

*/

// classe para acessar os dados do úsuario

class Usuario {
    public function setNome() {}
    public function getNome() {}
}

// classe para manipular os dados do úsuario

class UsuarioDB {

    public function add(Usuario $u) {}
    public function update(Usuario $u) {}
    public function delete($id) {}

}

/* Cada classe tem um função especifica apesar
de ambas serem para a mesma sessão (Usuario) */