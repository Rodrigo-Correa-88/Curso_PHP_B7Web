<?php
session_start();
require('header.php');

if($_SESSION['aviso']){
    echo $_SESSION['aviso'];
    echo $_SESSION['aviso'] = '';
} 
?> 

<a href="apagar.php">Apagar Cookie</a>

<form action="recebedor.php" method="get">

<label for="#">
    Nome:
    <br>
    <input type="text" name="nome">
</label>
<br>

<label for="#">
    E-mail:
    <br>
    <input type="text" name="email">
</label>
<br> 

<label for="#">
    Idade:
    <br>
    <input type="text" name="idade">
</label>
<br>
<br>
<input type="submit" value="Enviar">

</form>