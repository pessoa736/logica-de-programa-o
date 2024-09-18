<?php

function tabuadaDeTalNumero($n)
{
    $str = "";
    for ($i = 0; $i <= 10; $i++)
    {
        $str .= $i*$n . "\n";
    }
    return $str;
}

echo tabuadaDeTalNumero(7);