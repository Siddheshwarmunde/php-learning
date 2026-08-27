<?php

$userInfo = [
  ["name" => "sidd", "age" => 26, "city" => "parli"],
  ["name" => "sam", "age" => 20, "city" => "pune"],
  ["name" => "john", "age" => 55, "city" => "delhi"]
];
echo "<table border=1>";
foreach ($userInfo as $user) {
    echo "<tr>";
    foreach ($user as $key => $item) {
        echo "<td>";
        echo $key ." is ". $item;
        echo "<br>";
        echo "</td>";
    }
    echo "<br>";
    echo "<br>";
    echo "</tr>";
}
