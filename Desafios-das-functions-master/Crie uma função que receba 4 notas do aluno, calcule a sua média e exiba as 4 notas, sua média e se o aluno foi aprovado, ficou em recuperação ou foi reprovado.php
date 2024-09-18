<?php

function mediadenotas($N1,$N2,$N3,$N4){
    return ($N1+$N2+$N3+$N4)/4;
}

echo "um aluno com nota 5.0 no 1° bimestre \n";
echo "com nota 9.0 no 2° bimestre\n";
echo "com nota 7.5 no 3° bimestre\n";
echo "com nota 6.0 no 4° bimestre\n\n";
echo "então sua media é ". mediadenotas(5,9,7.5,6);