<?php

echo print_r($_POST);
echo "<br>";
echo "<br>";

if ($_POST) {
    echo "user name is ". $_POST["username"];
    echo "<br>";
    echo "user pass is ". $_POST["password"];
    echo "<br>";
    echo "user email is ". $_POST["email"];

}
