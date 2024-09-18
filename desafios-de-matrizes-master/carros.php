<?php



$carros = [
    ["nome" => "Uno", "marca" => "Fiat", "cor" => "prata", "n° portas" => 4, "ano" => 2014],
    ["nome" => "Fiesta", "marca" => "Ford", "cor" => "preto", "n° portas" => 2, "ano" => 2015],
    ["nome" => "Doblo", "marca" => "Fiat", "cor" => "verde", "n° portas" => 4, "ano" => 2013],
    ["nome" => "Celta", "marca" => "GM", "cor" => "preto", "n° portas" => 2, "ano" => 2012],
    ["nome" => "March", "marca" => "Nissan", "cor" => "prata","n° portas" => 2, "ano" => 2015],
    ["nome" => "Corsa", "marca" => "GM", "cor" => "branco", "n° portas" => 2, "ano" => 2010],
    ["nome" => "Ranger", "marca" => "Ford", "cor" => "prata", "n° portas" => 4, "ano" => 2012],
    ["nome" => "Trail Blazer", "marca" => "GM", "cor" => "branco", "n° portas" => 4, "ano" => 2014],
    ["nome" => "Ecosport", "marca" => "Ford", "cor" => "preto", "n° portas" => 4, "ano" => 2013],
    ["nome" => "Tucson", "marca" => "Hyundai", "cor" => "vinho", "n° portas" => 4, "ano" => 2012]
];

echo "veiculos e seus pespectivos anos: \n";
for ($i = 0; $i < count($carros); ++$i){
    echo "\t";
    echo $carros[$i]["nome"];
    echo " ";
    echo $carros[$i]["ano"];
    echo "\n";
}

echo "\nveiculos da cor prata \n";
for ($i = 0; $i < count($carros); ++$i){
    if ($carros[$i]["cor"] == "prata"){
        echo "\t";
        echo $carros[$i]["nome"];
        echo "\n";
    }
}

echo "\nveiculos, cor e quantidades de portas: \n";
for ($i = 0; $i < count($carros); ++$i){
    echo "\t";
    echo $carros[$i]["nome"];
    echo "\n\t  cor: ";
    echo $carros[$i]["cor"];
    echo ".\n\t  numeros de portas: ";
    echo $carros[$i]["n° portas"];
    echo "\n\n";
}

echo "\nveiculos ford \n";
for ($i = 0; $i < count($carros); ++$i){
    if ($carros[$i]["marca"] == "Ford"){
        echo "\t";
        echo $carros[$i]["nome"];
        echo "\n";
    }
}

echo "\nveiculos fabricados apartir de 2013 \n";
for ($i = 0; $i < count($carros); ++$i){
    if ($carros[$i]["ano"] >= 2013){
        echo "\t";
        echo $carros[$i]["nome"];
        echo "\n";
    }
}