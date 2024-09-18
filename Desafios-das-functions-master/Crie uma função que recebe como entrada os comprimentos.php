<?php

function checkOTipoDoTriangulo($ladoA, $ladoB, $ladoC){
    if($ladoA == $ladoB or $ladoA == $ladoC or $ladoB == $ladoC){
        return "triangulo isósceles";
    }elseif($ladoA == $ladoB and $ladoC == $ladoA){
        return "triangulo equilátero";
    }else{
        return "triangulo escaleno";
    }
}

$ran1 = rand(1, 3);
$ran2 = rand(1, 3);
$ran3 = rand(1, 3);
echo "um triangulo com lados com os seguntes comprimentos: ".$ran1.",".$ran2." e ".$ran3.". \n é um".checkOTipoDoTriangulo($ran1, $ran2, $ran3);
