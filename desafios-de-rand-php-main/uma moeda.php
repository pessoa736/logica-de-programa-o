<?php

function lanca_uma_moeda(){
    $espaco_amostral = [0 => "cara", 1 => "coroa"];
    return $espaco_amostral[rand(0,1)];
}

echo "juninho lançou um moeda, a qual caiu: ". lanca_uma_moeda();