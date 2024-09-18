<?php

$nomes_de_amigos=["sara", "thales", "dan", "rayssa", "mi"];

function mostraAmigos($BancoDeAmigos){
    echo "my friends";
    foreach ($BancoDeAmigos as $amigo => $colocaçãoDeAmigos) {
        echo $colocaçãoDeAmigos.". ".$amigo;
    }
}