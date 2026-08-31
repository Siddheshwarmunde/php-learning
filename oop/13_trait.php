<?php

trait parentCompany
{
    public function getTotalEmp()
    {
        echo "total employees are 294";
    }
}

trait parentCompany2
{
    public function totalOffice()
    {
        echo "total offices are 32";
    }
}

class company
{
    use parentCompany;
    use parentCompany2;
}

$cmp = new company();

$cmp->totalOffice();
echo "<br>";
$cmp->getTotalEmp();
