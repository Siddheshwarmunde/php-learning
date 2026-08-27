<?php
function add(){
echo 10 + 20;
}
add();
?>

<?php
echo "<hr>";
function sub($a, $b){
echo $a - $b;
echo "<br>";
}
sub(100, 50);
sub(30, 50);
sub(78, 44);
?>

<?php
echo "<hr>";
function userData($color, $sirname){
  echo "<h1 style='color:$color'> siddheshwar $sirname </h1>";
}
userData("green", "munde");
userData("red", "nothing");
?>