<?php

function contarElementosDeUmArray($a){
    $conta = 0;
    foreach ($a as $k => $v) {
        $conta += 1;
    }
    return $conta;
}

echo "nesse tal array tem esse tanto de elementos: ".contarElementosDeUmArray([0,1,2,3,4,5,6,7,8,9]);