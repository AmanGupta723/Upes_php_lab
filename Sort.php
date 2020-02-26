<html>
<head>
<title> </title>
</head>
<body>

<h3>EVEN and ODD</a></h3>
Enter the Numbers using Commas <br />
<br /><br />
<form method="post">

<input type="text" name="numbers"/>
<button type="submit">Check</button>
</form>
</body>
</html>
<?php

if($_POST)
{
    $numbers = $_POST['numbers'];
    
    $num= explode(',', $numbers);
    $i=0;
    $j=0;
    for($k=0;$k<count($num);$k++)
    { $n=$num[$k] % 2;
       if($n==0)
       {
           $even[$j]=$num[$k];
       $j=$j+1;
       }
       else 
       {
           $odd[$i]=$num[$k];
           $i=$i+1;
       }
    }
      sort($even);
       sort($odd);
       
       foreach($even as $n2)
       { echo "$n2"." ";
       }
       foreach($odd as $n3)
       {
           echo "$n3"." ";
       }
       }
       ?>
