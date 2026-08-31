<?php

class Teacher
{
    public $name = "siddheshwar";

    public function exam()
    {
        echo "next exam is on monday";
    }

    public function age()
    {
        echo "my age is 55";
    }

}

class Students extends Teacher
{
    public $name = "sam";

    public function age()
    {
        echo "my age is 24";
    }

}

$T1 = new Teacher();
$S1 = new Students();

$S1->age();
echo "<br>";

echo $S1->name;
echo "<br>";

$T1->age();
