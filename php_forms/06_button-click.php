<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<form action="" method="post">

<button name="btn" value="btn1">call function</button>

</form>
  
</body>
</html>

<?php


if (isset($_REQUEST['btn'])) {
    btn_click_test();
}

function btn_click_test()
{
    echo "button cliked on functional call";
}

?>