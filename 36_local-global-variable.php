<?php

$name = "siddheshwar";

function test()
{
    global $name;
    // $name = "sam";
    //$name = "siddheshwar";
    echo "local variable is $name";
    echo "<br>";

}


test();
echo $name;
