<?php


function calcular($n, $n2, $operacao) {
    $result = 0;
    if ($operacao = "+"){
        $result = $n + $n2;
    }elseif ($operacao = "-"){
        $result = $n - $n2;
    }elseif ($operacao = "*"){
        $result = $n * $n2;
    }elseif ($operacao = "/"){
        $result = $n / $n2;
    }
}

echo calcular(rand(0x00, 0xff), rand(0x00, 0xff), "+")."\n";
echo calcular(rand(0x00, 0xff), rand(0x00, 0xff), "-")."\n";
echo calcular(rand(0x00, 0xff), rand(0x00, 0xff), "*")."\n";
echo calcular(rand(0x00, 0xff), rand(0x00, 0xff), "/")."\n";