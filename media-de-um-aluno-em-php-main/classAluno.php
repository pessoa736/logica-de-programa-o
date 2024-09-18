<?php

function soma($Numeros){
    $soma = 0;
    foreach ($Numeros as $n){
        $soma += $n;
    }
    return $soma;
}


class aluno {
    private $name;
    private $notas;
    private $media;

    public function __construct($name){
        $this->name = $name;
    }

    public function calculeAMedia(){
        $soma = soma($this->notas);
        $tanto_de_itens = count($this->notas);
        
        $this->media = $soma/$tanto_de_itens;
        return $this->media;
    }

    public function setNotas($notas){
        $this->notas = $notas;
    }

    public function mostarDadosDoAluno(){
        echo $this->name . " tem uma media de " . $this->media . "\n";
        if ($this->media >= 7){
            echo "e é por isso que ele passou de ano";
        }else{
            echo "e é por isso que ele reprovou";
        }
        
    }
    
}
