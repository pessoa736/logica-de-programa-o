<?php

function mediaDoArray($a){
    $soma = 0;
    foreach ($a as $k => $v) {
       $soma += $v;
    }
    return $soma/count($a);
}

$arr = [1,23,4,5,4];

echo "em tal array tem tantos elementos, e a media desses elementos é". mediaDoArray($arr);