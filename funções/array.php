<?php

$lista = ['Cloud', 'Tifa', 'Aeris'];

echo "total: " . count($lista); 

$lista2 = ['Cloud', 'Tifa', 'Aeris', 'Barret', 'Red XIII'];

print_r(array_diff($lista2, $lista));

$numeros = [20,10,34,54,28];

$filtrados = array_filter($numeros, function ($item){
    if ($item < 30) {
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);

$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);

print_r($dobrados);

array_pop($numeros);
print_r($numeros);

if (in_array(10, $numeros)) {
    echo "Existe";
} else {
    echo "Não existe";
}

$pos = array_search(10, $numeros);
echo $pos;






?>