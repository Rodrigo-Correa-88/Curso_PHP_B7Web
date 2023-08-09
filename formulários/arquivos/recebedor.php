<?php
echo '<pre>';
print_r($_FILES);

if(in_array($_FILESd['arquivo']['type'], array('image/jpeg','image/jpg','image/png')))


// $nome = $_FILES ['arquivo']['name'];
$nome = md5(time().rand(0,1000).'jpg'); /* gerando um nome aleátorio para o arquivo isso gera  ais segurança nos uploads */
move_uploaded_file($_FILES['arquivo']['tmp_name'], 'arquivos/'. $nome)
?>