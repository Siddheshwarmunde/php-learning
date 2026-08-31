<?php


include("./teacher.php");
include("./student.php");

$teacher = new teacher\joiningDetails();
$student = new student\joiningDetails();

$teacher->joinDate();
echo "<br>";
$student->admissionDate();
