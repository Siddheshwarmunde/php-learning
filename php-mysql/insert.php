

<!-- // include("./config.php");

// $student = $conn->prepare("
// INSERT INTO `students` (`id`, `name`,`course`,`batch`, `city`)
// VALUES (NULL, 'luffy', 'sea-exploration', 'day-night', 'japan' )
// ");

// $result = $student->execute();
// if ($result) {
//     echo "data inserted";
// } else {
//     echo "failed to insert";
// } -->

<form action="" method="post">

    <input type="text" name="name" placeholder="Enter name">
    <br><br>

    <input type="text" name="course" placeholder="Enter course">
    <br><br>

    <input type="text" name="batch" placeholder="Enter batch">
    <br><br>

    <input type="text" name="city" placeholder="Enter city">
    <br><br>

    <button type="submit">Add Student</button>

</form>

<?php
if (isset($_POST['name'])) {
    $name = $_POST['name'];
    $course = $_POST['course'];
    $batch = $_POST['batch'];
    $city = $_POST['city'];


    include("./config.php");

    $student = $conn->prepare("
INSERT INTO `students` (`id`, `name`,`course`,`batch`, `city`)
VALUES (NULL, '$name', '$course', '$batch', '$city' )
");

    $result = $student->execute();
    if ($result) {
        echo "data inserted";
    } else {
        echo "failed to insert";
    }

}
?>