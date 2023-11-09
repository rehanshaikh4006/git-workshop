<?php
$a=1;
prime($a);
function prime($a)
{
    if($a%2==0 || $a%3==0 || $a%5==0 || $a%7==0)
    {
        echo "the number $a is prime number";
    }
    else
    {
        echo "the number is not a prime number";
    }
}
?>