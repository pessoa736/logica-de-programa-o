<?php 

function checkMaiorDeIdade($Ano){
    if (abs($Ano - 2024) > 17){
    	return true;
    }else{
    	return false;
    }
    
}

if (checkMaiorDeIdade(2005)){
    print("maior de idade");
}

