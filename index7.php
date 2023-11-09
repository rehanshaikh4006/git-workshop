<?php
$x=1;
$y=5;
num($x,$y);
function num($x,$y)
{
    echo "the starting no is $x, the ending number is $y<br>";
    $sum=0;
    for($x ; $x <= $y ; $x++)
    {
        
            $sum=$sum+$x;
            echo "$x ";
            
    
        
    }
    echo "<br> the sum of numbers are : $sum";
}
?>