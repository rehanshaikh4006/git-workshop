<?php
$i=6;
$n=2;
sum($i,$n);
function sum($i,$n)
{
    $sum=1;
    if($i<$n)
    {
        for($i;$i<=$n;$i++)
        {
            $sum=$sum*$i;
        }
        echo "the factorial of $n is : $sum";
    }
    elseif($i>$n)
    {
        for($n;$n<=$i;$n++)
        {
            $sum=$sum*$n;
        }
        echo "the factorial of $i is : $sum";
    }
}
?>