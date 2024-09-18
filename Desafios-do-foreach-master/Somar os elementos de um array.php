<?php

function SumElementosDoArray($a){
    $soma = 0;
    foreach( $a as $k => $v ){
        $soma += $v;
        echo "no index " . $k ." de tal array, tem o valor desse elemento é igual a: ". $v ."\n";
    }
    echo "\ne soma de todos esse elementos é "  .$soma;
}

SumElementosDoArray([1,2,3,4,5,6,7,8,9,10]);