<?php

function somaDe0aNumero($n)
{
    $resultado = 0;
    $i = 0;
    while ($i<100) {

        $resultado += $i;
        $i ++;
    }
    return $resultado;
}

echo somaDe0aNumero(100);