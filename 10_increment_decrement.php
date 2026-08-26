<?php
$a = 10;
echo $a++; // 10    , cause first dsiplay then increment
echo "<br>";
echo "<br>";
echo "<br>";
echo $a; // 11 
?>

<?php
$a = 10;
echo ++$a;  // 11, first increment then display
echo "<br>";
echo "<br>";
echo "<br>";
echo $a; // 11
?>

<?php
$a = 10;
echo --$a;  // 9, first deccrement then display
echo "<br>";
echo "<br>";
echo "<br>";
echo $a; // 9
?>

<?php
$a = 10;
echo $a--;  // 10, first display then decrement
echo "<br>";
echo "<br>";
echo "<br>";
echo $a; // 9
?>