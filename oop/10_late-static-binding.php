<?php

class countrySale
{
    public static $totalsale = 1000;

    public function getTotalSales()
    {
        echo static::$totalsale;
    }
}

class citySale extends countrySale
{
    public static $totalsale = 500;
}


$city = new citySale();
$city->getTotalSales();
?>

