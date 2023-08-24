<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuario_dao = new UsuarioDaoMysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if ($name && $email && $id) {
   
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($name);    
    $usuario->setEmail($email);  
      
    $usuario_dao->update($usuario);
   
    header("location: index.php");
    exit;

} else {
    header("Location: editar.php?id=.$id");
    exit;
}

