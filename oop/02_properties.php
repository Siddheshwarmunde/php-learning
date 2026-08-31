<?php

class Properties
{
    public $name = "siddheshwar munde";

    public function getName()
    {
        echo $this->name;
    }

    public function updateName()
    {
        $this->name = "john";
    }

}

$p1 = new Properties();

echo $p1->name;
$p1->getName();

$p1->updateName();
echo $p1->name;
