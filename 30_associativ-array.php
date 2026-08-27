<?php

$userDetails = [
"name" => "siddheshwar munde",
"age" => 26,
"city" => "parli",
"email" => "test@123.com"
];

foreach ($userDetails as $key => $data) {
    echo $key." is ".$data;
    echo "<br>";
}
