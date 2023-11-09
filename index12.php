<?php
$result=array("sub1"=>59,"sub2"=>69,"sub3"=>79,"sub4"=>89);
$total=0;
foreach($result as $sub=>$marks)
{
    echo $sub."=".$marks."<br>";
    $total=$total+$marks;
}
echo "total = $total";
?>