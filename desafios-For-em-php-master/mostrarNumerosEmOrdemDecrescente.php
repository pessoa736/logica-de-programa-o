<?php

function decrescente($n)
{
    $str = "";
    for ($i = $n; $i > 0; $i--)
    {
        $str .= $i . "\n";
    }
    return $str;
}

echo decrescente(10);