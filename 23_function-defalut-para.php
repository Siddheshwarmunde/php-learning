<?php
function userInfo($password, $color="blue",$username="Admin"){
  echo "<h1 style='color:$color'> username is $username and password is $password </h1>";
}

userInfo("pass@123","red");
userInfo( "sidd@123","green","sidd");
userInfo( "johnd@123");
userInfo("simm@123");
?>

// Put the required parameter first:
// $color     = "blue"   → optional
// $username  = "Admin"  → optional
// $password              → required