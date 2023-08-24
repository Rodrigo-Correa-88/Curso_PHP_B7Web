<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuario_dao = new UsuarioDaoMysql($pdo);
 

$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if ($name && $email) {


    if($usuario_dao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario -> setNome($name);
        $novoUsuario -> setEmail($email);

        $usuario_dao -> add($novoUsuario);

        header("Location: index.php");
        exit;

    } else {

        header("Location: index.php");
        exit;

    }
   
    } else {

    header("Location: adicionar.php");
    exit;

}

