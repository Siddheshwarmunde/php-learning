<?php

class User
{
    public $name = "Siddheshwar";
    protected $email = "siddheshwar@gmail.com";
    private $password = "123456";

    public function showUser()
    {
        echo $this->name . "<br>";
        echo $this->email . "<br>";
        echo $this->password . "<br>";
    }
}

$user = new User();

// PUBLIC - works
echo $user->name;

// PROTECTED - ERROR
// echo $user->email;

// PRIVATE - ERROR
// echo $user->password;
