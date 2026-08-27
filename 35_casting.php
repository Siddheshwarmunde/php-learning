<?php

$a = true;
$a = (string) $a;
var_dump($a);


$b = 100;
$b = (string) $b;
var_dump($b);

$c = "siddheshwar";
$c = (int) $c;
var_dump($c);

$d = 200;
$d = (float) $d;
var_dump($d);

$e = "munde";
$e = (array) $e;
var_dump($e);

$f = 29;
$f = (object) $f;
var_dump($f);
