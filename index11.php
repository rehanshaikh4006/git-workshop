<?php
fact(6,10);
function fact($i,$n)
{
    $sum=1;
    if($i<$n)
    {
        $start=$i;
        $end=$n;
    }
    elseif($i>$n)
    {
        $start=$n;
        $end=$i;
    }
    for($start;$start<=$end;$start++)
    {
        $sum=$sum*$start;
    }
    echo "the factorial of $i and $n is : $sum";
}
?>