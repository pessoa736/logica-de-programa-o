<?php

function numero_aleatorio(){
	$r = (float) 100;
	$tstamp1 = (float) microtime()*$r;
	$tstamp2 = (float) microtime()*$r;
	$a = (int) sqrt($tstamp1*$tstamp1 +$tstamp2*$tstamp2);
  return (float) ($a/($r^4));
}

function raio_numero_aleatrio($n1,$n2){
	$dn = (int) $n2 - $n1;
	return (int) (numero_aleatorio()*$dn - 1) + $n1; 
}

echo "vc lançou um dado de 6 lados, e o lado que caiu foi: \n";
	echo "\n".raio_numero_aleatrio(1, 6);