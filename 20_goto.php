<?php

for ($i = 0; $i <= 10; $i++) {

    echo $i;
    echo "<br>";
    
    if($i==5){
      goto runoutside;
    }
}
runoutside:
?>

<?php
echo "<hr>";
$x = 20;
echo "before condition <br>";

if($x ==20){
  goto out;
}

$name = "siddheshwar";
$age = 26;

echo $name;
echo $age;

out:
?>