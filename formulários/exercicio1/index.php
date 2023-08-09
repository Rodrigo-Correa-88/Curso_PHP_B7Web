<?php
session_start();

if (isset($_COOKIE['nome'])) {
    $nome = $_COOKIE['nome'];
    return $nome;
}
?>

<h1>Olá <?$nome?> - <a href="finalizar.php">Sair</a></h1>