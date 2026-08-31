<?php

include("./config.php");
$getStudents = $conn->prepare("SELECT * FROM students");
$getStudents-> execute();
$students = $getStudents->fetchAll();

// echo "<pre>";
// print_r($students);

// foreach ($students as $student) {
//     echo $student['name'];
//     echo "<br>";
// }

echo "<table border='1' >";
foreach ($students as $student) {

    echo "<tr>

    <td>" . $student['name']. "</td>;
     <td>" . $student['city']. "</td>;
      <td>" . $student['batch']. "</td>;
       <td>" . $student['course']. "</td>;


</tr>";


}

echo "</table>";
