<?php

$users = [
[1, "sam", "parli", "sam@email.com"],
[2, "spider", "nework", "spider@email.com"],
[3, "batman", "pune", "bat@email.com"],
[4, "sidd", "beed", "sidd@email.com"]
];

for ($i = 0; $i < count($users); $i++) {
    for ($j = 0; $j < count($users[$i]); $j++) {
        echo $users[$i] [$j];
        echo"<br>";
    }
}
