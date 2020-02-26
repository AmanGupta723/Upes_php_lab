<?php 
$rows=5;

for($i=1;$i<=$rows; ++$i)
    $k=0;
    {
        for($space=1;$space<=$rows-$i;++$space)
        {
            echo("  ");
        }

        while($k!= 2*$i-1)
        {
           echo("* ");
            ++$k;
        }

       echo("<br>");
    }
    ?>