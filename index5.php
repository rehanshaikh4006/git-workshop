<?php
$salary=10000;
$abdays=8;
netsalary($salary,$abdays);
function netsalary($salary,$abdays)
{
    $netsalary;
    echo "the salary is : $salary, the absentdays are : $abdays<br>";
    if($abdays<=3)
    {
        $cutamount=$abdays*50;
        echo "the cut amount is : $cutamount<br>";
        $netsalary=$salary-$cutamount;
        echo "the net salary is : $netsalary";
    }
    elseif($abdays>3 && $abdays<=7)
    {
        $cutamount=$abdays*75;
        echo "the cut amount is : $cutamount<br>";
        $netsalary=$salary-$cutamount;
        echo "the net salary is : $netsalary";
    }
    else
    {
        $cutamount=$abdays*100;
        echo "the cut amount is : $cutamount<br>";
        $netsalary=$salary-$cutamount;
        echo "the net salary is : $netsalary";
    }
}
?>