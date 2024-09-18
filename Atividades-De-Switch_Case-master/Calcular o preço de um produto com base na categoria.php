<?php

function PrecosPorCategoria($n){
    $preco = 0;
    switch ($n){
        case "cristais":
            $preco = "R$ 12.90";
            break;
        case "terços":
            $preco = "R$ 4.90";
            break;
        case "pingentes":
            $preco = "R$ 3.50";
            break;
    }
   
   return $preco;
}


$categorias = ["cristais", "terços", "pingentes"];
$catEscolhida = $categorias[rand(0, count($categorias) -1)];

echo  "o valor dos ". $catEscolhida ." é ". PrecosPorCategoria($catEscolhida);