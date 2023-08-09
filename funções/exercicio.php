<?php
date_default_timezone_set('America/Sao_Paulo');

function dataDia($dia, $mes, $ano)
{
    $data = "$dia/$mes/$ano";
    $dia = date('l', strtotime($data));

    switch ($dia) {
        case 'Monday':
            echo "$data - Segunda-Feira";
            break;
        case 'Tuesday':
            echo "$data - Terça-feira";
            break;
        case 'Wednesday':
            echo "$data - Quarta-feira";
            break;
        case 'Thursday':
            echo "$data - Quinta-feira";
            break;
        case 'Friday':
            echo "$data - Sexta-feira";
            break;
        case 'Saturday':
            echo "$data - Sábado";
            break;
        case 'Sunday':
            echo "$data - Domingo";
            break;
        default:
            echo "Data não definida";
            break;
    }
}


dataDia(9,06,1988);
