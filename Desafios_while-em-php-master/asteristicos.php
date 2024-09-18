<?php

function showAst($n)
{
	$str = "";
    $i = 1;
    while ($i < $n)
    {
        for ($j = 1; $j < $i; $j++)
        {
            $str .= "*";
        }
        $str .= "\n";
        $i++;
    }
    return $str;
}

echo showAst(10);