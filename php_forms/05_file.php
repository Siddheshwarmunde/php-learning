<?php

print_r($_FILES);
echo "<hr/>";

if ($_FILES['file-upload']) {
    $path = $_FILES['file-upload']['name'];
    echo $path;
    $upload_path = "./05_uploads/".$path;
    if (move_uploaded_file($_FILES['file-upload']['tmp_name'], $upload_path)) {
        echo "file uploaded succesfully";
    } else {
        die("no file found");
    }
} else {
    die("no file found");
}
