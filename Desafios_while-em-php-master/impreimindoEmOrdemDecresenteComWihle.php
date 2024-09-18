<?php

function decrescente($n)
{
    $str = "";
    $i = $n;
    while($i > 0)
    {
        $str .= $i . "\n";
        $i--;
    }
    return $str;
}

echo decrescente(10);