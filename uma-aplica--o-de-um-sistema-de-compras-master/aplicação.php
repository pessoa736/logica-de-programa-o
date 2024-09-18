<?php



$produtos = [
    "camiseta" => [
            "gg" => [19.9, rand(0, 30)], 
            "g" => [19.9, rand(0, 30)], 
            "m" => [19.9, rand(0, 30)], 
            "p" => [19.9, rand(0, 30)], 
            "pp" => [19.9, rand(0, 30)]
    ], 
    "shortes" => [
            "46" => [30, rand(0, 30)],
            "44" => [30, rand(0, 30)],
            "42" => [30, rand(0, 30)],
            "40" => [30, rand(0, 30)],
            "38" => [30, rand(0, 30)],
            "36" => [30, rand(0, 30)]
        ], 
    "calsas"=> [
            "46" => [30, rand(0, 30)],
            "44" => [30, rand(0, 30)],
            "42" => [30, rand(0, 30)],
            "40" => [30, rand(0, 30)],
            "38" => [30, rand(0, 30)],
            "36" => [30, rand(0, 30)],
        ], 
    "meias"=> [
        "43 - 44" => [10, rand(0, 30)],
        "41 - 42" => [10, rand(0, 30)],
        "37 - 38" => [10, rand(0, 30)],
        "34 - 35" => [10, rand(0, 30)],
        "36 - 37" => [10, rand(0, 30)],
        "27 - 28" => [10, rand(0, 30)],
    ]
];

$carrinho =[];

function add_produto_to_carrinho($produto, $tamanho, $quantidade){
    global $produtos;
    global $carrinho;
    $carrinho[] = [
        "produto" => $produto, 
        "tamanho" => $tamanho, 
        "valor" => $produtos[$produto][$tamanho][0], 
        "quantidade que foi addicionada ao carrinho" => $quantidade
    ];
}

function listar_produtos(){
    global $produtos;
    echo "aqui temos:";
    foreach ($produtos as $nome => $p1){
        echo "\n\t" . $nome . " \n";
        foreach ($p1 as $tamanho => $p2){
            echo "\t\t " . $tamanho. "  por " . $p2[0] . " (" . $p2[1]. " no estoque) \n";
        }
    }
}

echo "bem vindo a puddimshirt! nossa loja de moda \n";
listar_produtos();