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
    <tr>
        <?php foreach ($array as $key => $value): ?>
          <th><?php echo $key; ?> </th>
        <?php endforeach?>
    </tr>
    <tr>
        <?php foreach ($array as $key => $value): ?>
          <td><?php echo $value; ?> </td>
        <?php endforeach?>
    </tr>
</table>
</html>