<?php

function MostrarOsNumerosPares($N)
{
    $numeros = "";
    for ($i = 0; $i < $N; $i++){
        if ($i%2 == 0){
            $numeros .= "\n" . $i;
        }
    }
    echo $numeros;
}

MostrarOsNumerosPares(20);