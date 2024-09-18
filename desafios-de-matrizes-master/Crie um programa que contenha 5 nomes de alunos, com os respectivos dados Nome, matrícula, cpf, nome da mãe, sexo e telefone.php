<?php

class BANCO_DE_ALUNOS
{
    # "d" de dados
    private $spawn = [];

    function add($nome, $cpf, $nm, $sexo, $telefone)
    {
        $d = [];
        $d['nome'] = $nome or "aluno";
        
        $d['matricula'] = count($this->spawn)+1;
        
        $d['cpf'] = $cpf or "000.000.000-00";
        
        $d['nm'] = $nm or "mãe";
        
        $d['sexo'] = $sexo or "ainda não espificado";
        
        $d['telefone'] = $telefone or "(84) 90000-0000";

        $this->spawn[count($this->spawn)] = $d;
    }

    function show()
    {
        foreach ($this->spawn as $key => $aluno) 
        {
            echo "  nome: \t" . $aluno["nome"]. "\n";
            echo "  matricula: \t" . $aluno["matricula"]. "\n";
            echo "  cpf: \t\t" . $aluno["cpf"]. "\n";
            echo "  nome da mãe: \t" . $aluno["nm"]. "\n";
            echo "  sexo: \t" . $aluno["sexo"]. "\n";
            echo "  telefone: \t" . $aluno["telefone"]. "\n";
            echo "\n-------------------------------------------------\n";
             
        }
    }
}

$Sala = new BANCO_DE_ALUNOS;

$Sala->add("francisco","213.434.432-34","julia","masculino","(84) 98219-2381");
$Sala->add("pedro","423.756.678-94","maria","masculino","(84) 92831-2231");
$Sala->add("bela","123.456.789-01","luiza","feminino","(84) 98219-9139");
$Sala->add("vilma","983.384.432-54","julia","feminino","(84) 95869-2211");

$Sala->add("Davi", "122.984.475-67", "Gil","masculino","(84) 98823-1518");


$Sala->show();
