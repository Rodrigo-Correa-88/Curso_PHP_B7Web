<?php
session_start();

$nome = filter_input(INPUT_POST,'nome', FILTER_SANITIZE_SPECIAL_CHARS);

if ($nome) {
    $expiracao  = time() + (86400) * 30;
    setcookie('nome',$nome);
} else {   
    header('Location:login.php');
    exit;
}

