<?php

echo "this is login php file <br>";


if ($_GET) {
    echo "user name is ". $_GET["user_name"];
    echo "<br>";
    echo "<br>";
    echo "user password is ". $_GET["password"];
}
