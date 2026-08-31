<?php

class constructorDemo
{
    public function __construct()
    {
        echo "construction called";
    }
}

$cd = new constructorDemo();
