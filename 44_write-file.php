

<form action="" method="post">
<input type="text" name="filename" placeholder="enter content"/>
<br>
<br>

<textarea name="content" id="content"></textarea>
<br>
<br>

<button>create file</button>
</form>


<?php

// $fileName = "./files/dummy.txt";
// $content = "this is dummy file";
// $file = fopen($fileName, "w") or die("unable to create");
// fwrite($file, $content);
// fclose($file);
// echo "file created";

if (isset($_POST['filename'])) {
    $fileName = "files/".$_POST['filename'];
    $content = $_POST['content'];
    $file = fopen($fileName, "w") or die("unable to create");
    fwrite($file, $content);
    fclose($file);
    echo "file created";

}

?>