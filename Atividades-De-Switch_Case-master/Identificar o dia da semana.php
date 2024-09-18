<?php

function diaDaSemana($diaDoMes){
    #apenas aceite que um mês seja um mês comecial (ou seja todo mês tem 30 dias)
    if ($diaDoMes<0) {$diaDoMes = 0;} elseif ($diaDoMes>30) {$diaDoMes = 30;}
    $ds = ((($diaDoMes-1)%7));
    $dsstr = "";
    $pronome = "";
    switch ($ds) {
        case 0:
            $dsstr = "domingo";
            $pronome = "o";
            break;
        case 1:
            $dsstr = "segunda";
            $pronome = "a";
            break;
        case 2:
            $dsstr = "terça";
            $pronome = "a";
            break;
        case 3:
            $dsstr = "quarta";
            $pronome = "a";
            break;
        case 4:
            $dsstr = "quinta";
            $pronome = "a";
            break;
        case 5:
            $dsstr = "sexta";
            $pronome = "a";
            break;
        case 6:
            $dsstr = "sábado";
            $pronome = "o";
            break;
    }

    return [$dsstr, $pronome];
}

$diaDoMesAleatorio = rand(0, 30);
$ds = diaDaSemana($diaDoMesAleatorio);
echo "o dia ". $diaDoMesAleatorio." do mês é ".$ds[1]." ".$ds[0];