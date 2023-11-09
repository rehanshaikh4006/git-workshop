<?php
$salary=50000;
$netsalary;
$bonus;
if($salary>=5000 && $salary<10000)
{
    echo "salary is $salary<br>";
    $bonus=$salary*0.10;
    echo "the bonus is $bonus<br>";
    $netsalary=$salary+$bonus;
    echo "the netsalary is $netsalary";
}
elseif($salary>=10000 && $salary<50000)
{
    echo "salary is $salary<br>";
    $bonus=$salary*0.075;
    echo "the bonus is $bonus<br>";
    $netsalary=$salary+$bonus;
    echo "the netsalary is $netsalary";
}
elseif($salary>=50000 && $salary<100000)
{
    echo "salary is $salary<br>";
    $bonus=$salary*0.05;
    echo "the bonus is $bonus<br>";
    $netsalary=$salary+$bonus;
    echo "the netsalary is $netsalary";
}
elseif($salary>=100000)
{
    echo "salary is $salary<br>";
    $bonus=$salary*0.025;
    echo "the bonus is $bonus<br>";
    $netsalary=$salary+$bonus;
    echo "the netsalary is $netsalary";
}
?>