<?php

function ShowElementosDoArray($a){
    foreach( $a as $k => $v ){
        echo "no index " . $k ." de tal array, tem o valor igual a: ". $v ."\n";
    }
}

ShowElementosDoArray([1,2,3,4,5,6,7,8,9,10]);