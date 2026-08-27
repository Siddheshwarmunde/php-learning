<?php

$a = 10;
$b = 20;
$c = 30;

if ($a == 10 && $b == 20) {
    echo "true condition";
}

if ($a == 10 and $b == 20) {
    echo "true condition";
}

if ($a == 10 or $b == 30) {
    echo "true condition";
}

if ($a == 10 xor $b == 100) {    // one true then execute, not when both false or both true
    echo "true condition";
}

if ($a != 20) {
    echo "true condition";
}
