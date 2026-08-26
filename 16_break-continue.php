<?php
for($i=0; $i<=10; $i++){
  echo $i;
  echo "<br>";
  if($i ==5){
    break;
  }
}
?>
 
<?php
echo "<hr>";
$user = 7;
for($i=0; $i<=10; $i++){
  echo $i;
  echo "<br>";
  if($i == $user){
    break;
  }
}
?>

<?php
echo "<hr>";
for($i=1; $i <=10; $i++){

    if($i == 3 || $i == 7){
  continue;
}

echo $i;
echo "<br>";
}

?>