<?php

$numeroParaSomar = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

function somarArray()
{
    global $numeroParaSomar;
    $result = 0;
    foreach ($numeroParaSomar as $numero){
        $result += $numero;
    }
    echo $result;
}

somarArray();