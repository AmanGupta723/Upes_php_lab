<?php 
function swap(&$a,&$b)
{   
    $t=$b;
    $b=$a;
    $a=$t;   
}

$x=10;
$y=20;
swap($x,$y);

echo "x=".$x."y=".$y;




?>