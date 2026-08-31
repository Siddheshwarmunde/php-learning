<?php

class constantDemo
{
    public const collegename = "amity univercity";

    public function getCollegeName()
    {
        echo self::collegename;
    }
}
echo constantDemo::collegename;

$cd = new constantDemo();
$cd->getCollegeName();
