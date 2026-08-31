<?php

trait parentCompany1
{
    public function getEmp()
    {
        echo "100";
    }
}

trait parentCompany2
{
    public function getEmp()
    {
        echo "200";
    }

}

class company
{
    use parentCompany1;
    use parentCompany2{
        parentCompany1::getEmp insteadof parentCompany2;
        parentCompany2::getEmp as getEmp2;
    }
}

$c1 = new company();
$c1->getEmp();
echo "<br>";
$c1->getEmp2();
