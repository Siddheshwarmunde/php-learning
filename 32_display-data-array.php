<?php

$users = [

[1,"sam", "developer", "pune"],
[2,"john", "tester", "noida"],
[3, "parker", "manager", "delhi"],
[4, "sidd", "boss", "india"]

];

echo "<table border=1>";

for($i=0; $i<count($users); $i++){
  echo "<tr>";
  for($j=0; $j<count($users[$i]); $j++){
    echo"<td>";
        echo $users[$i] [$j];
        echo"<br>";
        echo"</td>";
  }
  echo "</tr>";
}

?>