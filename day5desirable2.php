<?php
$i=1;
$n=5;
prime($i,$n);
function prime($i,$n)
{
    echo "the prime numbers are";
    for($i;$i<=$n;$i++)
    {
        if($i%2==0 || $i%3==0 || $i%5==0 || $i%7==0)
        {
            echo ",".$i;
        }
    }
}
?>