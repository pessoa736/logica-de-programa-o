<?php

function MesDoAnos($valor){
    $ma = ((($valor)%13));
    $mastr = "";
    switch ($ma) {
        case 1:
            $mastr = "janeiro";
            break;
        case 2:
            $mastr = "fevereiro";
            break;
        case 3:
            $mastr = "março";
            break;
        case 4:
            $mastr = "abril";
            break;
        case 5:
            $mastr = "maio";
            break;
        case 6:
            $mastr = "junho";
            break;
        case 7:
            $mastr = "julho";
            break;
        case 8:
            $mastr = "agosto";
            break;
        case 9:
            $mastr = "setembro";
            break;
        case 10:
            $mastr = "outubro";
            break;
        case 11:
            $mastr = "novembro";
            break;
        case 12:
            $mastr = "desenbro";
            break;
    }

    return $mastr;
}

$MesDoAnoAleatorio = rand(0, 12);
$Ma = MesDoAnos($MesDoAnoAleatorio);
echo "o mês ". $MesDoAnoAleatorio." do ano é ".$Ma;