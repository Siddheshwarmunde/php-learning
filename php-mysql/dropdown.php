<?php

include("./config.php");
$getStudents = $conn->prepare("SELECT id, name FROM `students`");
$getStudents-> execute();
$studentData = $getStudents->fetchAll();
// echo "<pre>";
// print_r($studentData);

echo "<select>";
echo "<option> select name</option>";

foreach ($studentData as $student) {
    echo "<option value=".$student['id'].">".$student['name']. "</option>";
}

echo "</select>";
