<?php

function CheckConsoanteOuVogal($letra){
    switch ($letra){
        case "a":
        case "e":
        case "i":
        case "o":
        case "u":
           return "vogal";
        
        default:
            return "consoante";
    }
}

$alfabeto = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"];
$letraAleatoria = $alfabeto[rand(0, count($alfabeto) -1)];

echo "a letra ".$letraAleatoria." é uma ".CheckConsoanteOuVogal($letraAleatoria);