<?php

echo print_r($_REQUEST);
echo "<hr>";

foreach ($_REQUEST as $key => $data) {
    echo $key ." is ". $data;
    echo "<br>";
}
