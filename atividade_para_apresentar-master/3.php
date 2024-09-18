<?php


$alunos_que_cursam_Ti = [
    "juninho",
    "pedro",
    "jubiskleitom",
    "roblox",
    "tomas",
];

$alunos_que_cursam_letras= [
    "juninho",
    "pedro",
    "jubiskleitom",
    "roblox",
    "tomas",
];

$aluno_que_cursam_letras_e_TI = array_intersect($alunos_que_cursam_Ti, $alunos_que_cursam_letras);

print_r($aluno_que_cursam_letras_e_TI);