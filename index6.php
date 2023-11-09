<?php
$x=1;
$y=6;
odd_num($x,$y);
function odd_num($x,$y)
{
    echo "the starting no is $x, the ending number is $y<br>";
    $sum=0;
    for($x ; $x < $y ; $x++)
    {
        if($x % 2 != 0)
        {
            $sum=$sum+$x;
            echo "$x ";
            
        }
        
    }
    echo "<br> the sum of odd numbers are : $sum";
}
?>