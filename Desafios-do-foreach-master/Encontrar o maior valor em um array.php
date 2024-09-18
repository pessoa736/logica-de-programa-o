<?php

function maiorElementoDoArray($a){
    $maior = 0;
    $soma = 0;
    foreach ($a as $k => $v) {
        if ($maior < $v) {
            $maior = $v;
        }
    }
    return $maior;
}

$arr = [1,23,200, 4,5,4];

echo "em tal array tem tantos elementos, e o maior elemento dele é ". maiorElementoDoArray($arr);