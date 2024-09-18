<?php

function somaDe0aNumero($n)
{
    $resultado = 0;
    for ($i = 0; $i < $n; $i++)
    {
        $resultado += $i;
    }
    return $resultado;
}

echo somaDe0aNumero(100);