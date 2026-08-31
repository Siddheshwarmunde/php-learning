<?php

// final class car
// {
// }

// class kia extends car
// {
// }

// $k1 = new kia();

class honda
{
    final public function companyName()
    {
        echo "honda";
    }
}

class car extends honda
{
    // public function companyName()
    // {
    //     echo "toyota";
    // }
}

$c = new car();
$c->companyName();
