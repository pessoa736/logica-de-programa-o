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
} 

function somaMatriz($A1, $B1)
{
    $A = $A1->mat;
    $B = $B1->mat;
    return new matriz4x4(
        [$A[0][0]+$B[0][0], $A[0][1]+$B[0][1], $A[0][2]+$B[0][2], $A[0][3]+$B[0][3]],
        [$A[1][0]+$B[1][0], $A[1][1]+$B[1][1], $A[1][2]+$B[1][2], $A[1][3]+$B[1][3]],
        [$A[2][0]+$B[2][0], $A[2][1]+$B[2][1], $A[2][2]+$B[2][2], $A[2][3]+$B[2][3]],
        [$A[3][0]+$B[3][0], $A[3][1]+$B[3][1], $A[3][2]+$B[3][2], $A[3][3]+$B[3][3]]
    );
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
    [  1,   2,   3,   4],
    [  5,   6,   7,   8],
    [  9,  10,  11,  12],
    [ 13,  14,  15,  16]
);
print($B);

print("\n");
print("e a soma dessas matrizes será: \n");

$C = somaMatriz($A, $B);
print($C);