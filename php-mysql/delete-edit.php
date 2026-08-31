<?php

include("./config.php");

$students = $conn->prepare("SELECT * FROM students");
$students->execute();
$result = $students->fetchAll();

echo "<table border='1'>";

foreach ($result as $student) {
    echo "<tr>
<td>" . $student['name'] ."</td>
<td>" . $student['batch'] ."</td>
<td>" . $student['course'] ."</td>
<td>" . $student['city'] ."</td>
<td> <form method='post'> <button name='delete' value=".$student['id']."> delete </button> </form> </td>

  echo </tr>";
}
echo "</table>";

if (isset($_POST['delete'])) {
    $id = $_POST['delete'];
    $students = $conn->prepare("delete from `students` where id=$id");
    $students->execute();

    if ($students->execute()) {
        echo "record deletd";
    } else {
        echo "record not found";
    }

}
