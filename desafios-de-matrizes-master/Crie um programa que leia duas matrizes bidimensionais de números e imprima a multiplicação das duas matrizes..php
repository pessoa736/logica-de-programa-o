<?php

class matriz4x4{
    public $mat = array(
        array(0, 0, 0, 0),
        array(0, 0, 0, 0),
        array(0, 0, 0, 0),
        array(0, 0, 0, 0)
    );

    function __construct($l1, $l2, $l3, $l4)
    {
        $this->mat = array(
            $l1,
            $l2,
            $l3,
            $l4
        );
    }

    function __tostring()
    {
        $str = "";
        for ($i= 0; $i< 4; $i++)
        {
            for ($j= 0; $j< 4; $j++)
            {
                $str .= $this->mat[$i][$j]." ";
            }
            $str .= "\n";
        }
        return $str;
    }
    function getElemento($i, $j)
    {
        return $this->mat[$i][$j];
    }
    function SetElemento($i, $j, $value)
    {
        $this->mat[$i][$j] = $value;
    }
}

function MultiplicarMatriz($A, $B)
{
    $linhasA = count($A->mat);
    $colunasA = count($A->mat[1]);
    $linhasB = count($B->mat);
    $colunasB = count($B->mat[1]);

    $NewMat = new matriz4x4([0,0,0,0],[0,0,0,0],[0,0,0,0],[0,0,0,0]);

    for ($i= 0; $i<$linhasA; ++$i){
    for ($j= 0; $j<$colunasB; ++$j){
        for ($k = 0; $k<$linhasB; ++$k){
            $NewMat->SetElemento($i,$j, $NewMat->getElemento($i, $j) + $A->mat[$i][$k] * $B->mat[$k][$j]);
        }
    }
    }
    return $NewMat;
}

echo "\n";
echo "uma matriz A tem os seguintes valores: \n";

$A = new matriz4x4(
    [  1,   2,   3,   4],
    [  5,   6,   7,   8],
    [  9,  10,  11,  12],
    [ 13,  14,  15,  16]
);

print($A);


echo "\n";
echo "e a matriz B tem os seguintes valores: \n";

$B = new matriz4x4(
    [  1,   0,   -1,   1],
    [  0,   1,   1,   0],
    [  0,   1,   1,   0],
    [  1,   0,   0,   1]
);
print($B);

print("\n");
print("e a soma dessas matrizes será: \n");

$C = MultiplicarMatriz($A, $B);
print($C);
