<form action="" method="post">
<input type="text" name="user" placeholder="enter user name"/>
<br>
<br>
<button name="btn" value="set">set cookies</button>
<br>
<br>
<button name="btn" value="display">display cookies</button>
<br>
<br>
<button name="btn" value="delete">delete cookies</button>
</form>


<?php

if (isset($_POST['btn'])) {

    if ($_POST['btn'] == "set") {
        $val = $_POST['user'];
        setcookie("user", $val);
        echo "cookie is set";
    }
    if ($_POST['btn'] == "display") {
        if (isset($_COOKIE['user'])) {
            echo $_COOKIE['user'];
        }
    }

    if ($_POST['btn'] == "delete") {
        if (isset($_COOKIE['user'])) {
            setcookie("user", "null", -1);
        }
    }


}


?>