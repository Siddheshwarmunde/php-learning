<?php

$users = ["japan", "australia", "china", "india", "pak", "usa", "russia"];

foreach ($users as $x) {


    if ($x == "pak") {
        continue;
    }

    echo $x;
    echo "<br>";


    //  if($x == "india"){
    // break;
    //}

}

foreach ($users as $x):
    echo $x;
    echo "<br>";
endforeach;
