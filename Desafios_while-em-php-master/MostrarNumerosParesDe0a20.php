<?php

function MostrarOsNumerosPares($N)
{
    $numeros = "";
    $i = 0;
    while($i <= $N){
        if ($i%2 == 0){
            $numeros .= "\n" . $i;
        }
        $i++;
    }
    echo $numeros;
}

MostrarOsNumerosPares(20);