<?php

/* Para fazer uma conexão com banco de dados na grande maioria
das vezes utilizamos a classe PDO que é uma classe nativa no 
PHP */

$pdo = new PDO("mysql:dbname=teste; host=127.0.0.1","root");

/* O comando query da classe PDO e o comando que utiliza a linguagem
sql para acessar os comando da tabela no banco de dados */

$sql = $pdo->query('SELECT * FROM usuarios');

$dados = $sql -> fetchAll(PDO:: FETCH_ASSOC);

echo '<pre>';
print_r($dados);