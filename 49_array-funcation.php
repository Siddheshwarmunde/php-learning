<?php

$users = ["name","city","age","professional","city","age"];
$user = ["country" => "india", "state" => "maha", "district" => "beed", "tq" => "parli"];

print_r($users);
echo "<hr/>";

if (is_array($users)) {
    echo "this is an array";
} else {
    echo "this is not an array";
}

echo "<hr/>";


echo count($users);
echo "<hr/>";

unset($users[3]);
print_r($users);
echo "<hr/>";

print_r(array_keys($user));
echo "<hr/>";

array_push($users, "address");
print_r($users);

echo "<hr/>";
array_pop($users);
print_r($users);

echo "<hr/>";
echo implode($users);
print_r($users);

echo "<hr/>";
$str = "hello my name is siddheshwar munde";
print_r(explode(",", $str));
echo $str;

echo "<hr/>";
$data = array_merge($user, $users);
print_r($data);

echo "<hr/>";
print_r($users);
"<br>";
$data1 = array_unique($user);
print_r($data1);
