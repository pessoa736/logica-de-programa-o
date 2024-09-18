<?php

$frutas = [
	"manga",
	"maçã",
	"uva",
	"beringela",
	"morango", 
	"melacia",
	"abacaxi",
	"pitaya"
	
];


$quantidade = [
	rand(0,20),
	rand(0,20),
	rand(0,20),
	rand(0,20),
	rand(0,20),
	rand(0,20),
	rand(0,20),
	rand(0,20)
];

$quantidades_de_frutas = array_combine($frutas, $quantidade);

print_r($quantidades_de_frutas);

