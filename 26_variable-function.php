

<?php
function test(){
  echo "test funcation called<br>";
}
$functionname = "test";

function apple(){
echo "apple funcation called";
}

$apple = "apple";


function main($a){
$a();
// echo "main function called";
}

main($functionname);
main($apple);

?>



