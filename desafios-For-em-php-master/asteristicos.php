<?php

function showAst($n)
{
	$str = "";
    for ($i = 1; $i < $n; $i++)
    {
        for ($j = 1; $j < $i; $j++)
        {
            $str .= "*";
        }
        $str .= "\n";
    }
    return $str;
}

echo showAst(10);