<?php

$notas = [0, 2, 10, 9];

function soma($n){
    $result = 0;
    foreach ($n as $k => $v) {
        $result += $v;
    }
    return $result/count($n);
}

echo "um aluno com as seguintes notas: 0, 2, 10, 9 \n";


echo "tem uma media: ".soma($notas);