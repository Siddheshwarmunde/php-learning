<?php

$arr = ["india","china","america","englnad"];

print_r($arr);
echo"<hr>";

array_push($arr, "japan", "thiland", "indonesia");
print_r($arr);

echo"<hr>";
array_pop($arr);
print_r($arr);

echo"<hr>";
array_splice($arr, -3);
print_r($arr);
