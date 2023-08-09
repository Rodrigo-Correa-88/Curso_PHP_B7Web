<?php 
$tipo = 'foto';

if ( $tipo == 'foto') {
    echo 'foto';
} elseif ($tipo == 'texto') {
    echo 'texto';
} else {
    echo 'video';
}

echo "\n";

$tipo = 'video';

switch ($tipo) {
    case 'video':
        echo 'Exibindo Video';
        break;

    case 'Foto':
        echo 'Exibindo Foto';
    
    default:
        # code...
        break;
}

