<?php

print_r($_POST);
echo "<hr>";

if (isset($_POST['username'])) {
    echo "user name is " . $_POST['username'];
    echo "<br>";
    echo "<br>";

    echo "user password is " . $_POST['password'];
    echo "<br>";
    echo "<br>";

    echo "user email is " . $_POST['email'];
    echo "<br>";
    echo "<br>";

    echo "user skills is " . implode(", ", $_POST['skills']);
    echo "<br>";
    echo "<br>";

    echo "user gender is " . $_POST['gender'];
    echo "<br>";
    echo "<br>";

    echo "user city is " . $_POST['city'];
    echo "<br>";
    echo "<br>";



    echo "user bio is " . $_POST['bio'];
    echo "<br>";
    echo "<br>";

}
