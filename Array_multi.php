<?php 
$car = array(array("Volvo",20,35),
        array("Bmw",15,30),
        array("Saab",85,25),
         array("Land rover,64,36")
    );
for($i=0;$i<Count($car);$i++)
{
    for($j=0;$j<3;$j++)
{
 
    
   echo  $car[$i][$j]."   ";
 
}
echo "</Br>";
}


?>