<?php

require_once("classAluno.php");

// criando um novo aluno
$Davi = new aluno("Davi dos Santos Passos");

// colocando as notas no objeto do aluno
$Davi->setNotas([10, 2, 10, 9]);

// calculando a media
$Davi->calculeAMedia() ;

// mostrando a situação do aluno :/
$Davi->mostarDadosDoAluno() ;
