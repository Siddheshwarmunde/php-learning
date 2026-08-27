<?php

setcookie("color", "red", time() + (86400));
setcookie("country", "india", time() + (1000));

if (isset($_COOKIE['color'])) {
    echo "current color is ". $_COOKIE['color'];
} else {
    echo "no color set";
}


echo "<hr>";
print_r($_COOKIE);

echo "<hr>";

if (isset($_COOKIE['country'])) {
    echo "current ciuntry is ".$_COOKIE['country'];
}
