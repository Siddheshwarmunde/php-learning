<?php

class pulsar
{
    public static $country = "india";

    public static function companyName()
    {
        echo "bike company";
    }

}

pulsar::companyName();
echo "<br>";

echo pulsar::$country;
