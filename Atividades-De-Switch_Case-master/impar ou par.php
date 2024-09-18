<?php

function imparOuPar($n){
    $restos = $n%2;
    $resultado = "";
    switch ($restos) {
        case 0:
            $resultado =  "par";
            break;
        case 1:
            $resultado = "impar";
            break;
        
        default:
            $resultado = "isso não é um numero";
            break;
    }
    return $resultado;
}


$numerosAleatorios = rand(0, 10);
echo "o ".$numerosAleatorios." é um numero ".imparOuPar($numerosAleatorios);