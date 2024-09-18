<?php

$numero = [1, 2, 3, 4, 100, 6, 7, 8, 9, 10];

function maiorElemento()
{
    global $numero;
    $maior = 0;
    foreach ($numero as $numeroElemento){
        if ($maior < $numeroElemento) {
            $maior = $numeroElemento;
        }
    }
    return $maior;
}

echo maiorElemento();