<?php

$CPFs_existentes = ["666.666.666-66", "010.100.001-11"];

class pessoa{
    public $nome;
    private $cpf;
    public $idade;

    function __construct($nome, $cpf, $idade){
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->idade = $idade;
    }
    public function checkCPF(){
    	global $CPFs_existentes;
        foreach ($CPFs_existentes as $cpf){
            if($cpf == $this->cpf){
                return true;
            }else{
                return false;
            }
        }
    }
}

$Thales = new pessoa("Thales", "666.666.666-66", 16);

echo " thales andando por ai, encontrou uma balada, a qual decidiu entrar\n ";
echo "chegando la, pediram o cpf dele ";

if ($Thales->checkCPF()) {
    echo " após checarem o cpf, perguntaram qual éra a idade dele \n";
    if ($Thales->idade >= 18) {
        echo " o qual após provar que era maior idade, permitiram ele entra \n";
    }else{
        echo " apos ele falar, foi negado do multiverso \n";
    }
}else{
    echo " quando ele deu... barraram ele por estar com um cpf não valido \n";
}