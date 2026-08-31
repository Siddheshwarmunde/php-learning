<?php

class MathOperation
{
    public $val = 77;

    public function sum($a, $b)
    {
        echo $a + $b;
    }

    public function multi($a, $b)
    {
        echo $a * $b;
    }

}

$math = new MathOperation();
$math->sum(100, 200);
echo "<br>";
$math->sum(500, 200);

echo "<br>";
$math1 = new MathOperation();
$math1->sum(5400, 2040);


echo "<br>";
$math2 = new MathOperation();
$math2->multi(100, 200);
