<?php

//função que retorna numero aleatório
function numero_aleatorio(){
	$numero_de_casas_decimais = 2; // quanto maior, mais aleatórios será 
	$tstamp1=(float) time()*(10^$r); // pega o time stamp 
	$tstamp2=(float) time()*(10^$r); // pega um novo time stamp
	$a = (int) sqrt($tstamp1*$tstamp1 +$tstamp2*$tstamp2); // cálculo matemático para fazer uma interpolação entre os dois 
  return (float) ($a/(10^($r*2))); //retorna uma interpolação aleatoria entre 0 e 1
}

//função que retorna um numero aleatórios no intervalo de dois valores
function raio_numero_aleatrio($n1,$n2){
	$dn = (int) $n2 - $n1; // a diferença entre os dois valores 
	return (int) (numero_aleatorio()*$dn + $n1);
}

// mostrando um número aleatórios entre -100 e 10
echo raio_numero_aleatrio(-100, 10);
