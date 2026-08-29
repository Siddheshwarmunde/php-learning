<?php

echo "Before";

exit();

echo "After";

?>

<?php

echo "Starting...";

die("Something went wrong");

echo "This will not run";

?>

<?php

function add($a, $b)
{
    return $a + $b;
}

$result = add(10, 20);

echo $result;

?>