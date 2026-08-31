<?php

class userAuth
{
    public function login($userType)
    {
        echo " $userType logged in";
    }
}

class Students extends userAuth
{
    public function getName()
    {
        echo "siddheshwar";
    }
}

class Teacher extends userAuth
{
    public function getSkill()
    {
        echo "java, php, javascript";
    }
}


$s1 = new Students();
$t1 = new Teacher();

$s1->login("student");
echo "<br>";

$s1->getName();
echo "<br>";

$t1->login("teacher");
echo "<br>";

$t1->getSkill();
