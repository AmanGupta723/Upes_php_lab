<?php
function swap($a, $b)
{
    $temp=$a;
    $a=$b;
    $b=$temp;
    echo"a=" .$a."  b=".$b."<br>";
}
$x=10;
$y=20;
swap($x,$y);
echo "before swapping a =".$x."and b=".$y;
?>