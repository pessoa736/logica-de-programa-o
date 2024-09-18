<?php

function tabuadaDeTalNumero($n)
{
    $str = "";
    $i = 1;
    while ( $i <= 10)
    {
        $str .= $i*$n . "\n";
        $i++;
    }
    return $str;
}

echo tabuadaDeTalNumero(7);