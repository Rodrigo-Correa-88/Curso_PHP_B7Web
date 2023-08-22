<?php

require 'config.php';

$name = filter_input(INPUT_POST, 'name');

$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);


if ($name && $email) {

    /* verificação se possui e-mails iguais */
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE email = :email");
    $sql -> bindValue(':email', $email);
    $sql -> execute();

    
    if($sql -> rowCount() === 0){

    $sql = $pdo->prepare("INSERT INTO usuarios (nome, email) VALUES (:nome, :email)");
    $sql -> bindValue(':nome' , $name);
    $sql -> bindValue(':email' , $email);
    $sql -> execute();

    header("Location: CRUD.php");
    exit;
    } else {
        header("Location: adicionar.php");
        exit;
        }

    } else {
    header("Location: adicionar.php");
    exit;
}

