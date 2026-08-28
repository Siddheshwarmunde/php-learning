<?php

$user = ["name" => "siddheshwar", "age" => 26, "profession=>developer", "city" => "pune"];
print_r($user);
echo "<hr/>";
$user_json = json_encode($user);    // array to json
echo $user_json;
?>

<?php
echo "<hr/>";
$data = '{"name":"munde", "age":39, "city":"parli"}'; // json to array
$dataArray = json_decode($data, true);
print_r($dataArray);

?>