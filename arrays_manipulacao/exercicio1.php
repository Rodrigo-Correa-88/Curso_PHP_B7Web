<?php
$array = [
    'nome' => 'Cloud',
    'idade' => 26,
    'jogo' => 'Final Fantasy VII',
    'cor' => 'Azul',
    'profissao' => 'Soldado'
];
?>
<html>
<table border="1">
<?php foreach ($array as $key => $value): ?>
<tr>
   <td> <?php echo $key; ?> </td>
   <td><?php echo $value; ?></td>
</tr>
<?php endforeach?>
</table>
</html>