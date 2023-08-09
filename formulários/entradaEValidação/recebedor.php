<?php
session_start();

$nome = filter_input(INPUT_GET,'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_GET,'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_GET,'idade', FILTER_SANITIZE_NUMBER_INT);
/* filter funciona com post tbm */

if ($nome && $email && $idade){

    /* para setar cokies deve ser sempre antes de apresentar algo na tela */
    $expiracao  = time() + (86400) * 30;
    setcookie('nome', $nome, $expiracao);

    echo "Nome: " . $nome . '<br>'. "Idade: " . $idade . '<br>' . "E-mail: " . $email;    
} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';
   header("Location:index.php");
   exit;
}

?>