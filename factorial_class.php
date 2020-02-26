<?php
class factorial_class
{

    function factorial($num)
    {
 $t=1;
        for($i=1;$i<=$num;$i++)
        {
            $t=$t*$i;
        }
        return $t;
    }
}
$f1=new factorial_class();
echo "factorial".$f1->factorial(12);

?>
