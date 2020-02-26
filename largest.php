<html>
<head>
<title>Find Largest & Smallest numbers </title>
</head>
<body>

<h3>Largest & Smallest numberss </a></h3>
Enter the Numbers using Commas <br />
<br /><br />
<form action="" method="post">

<input type="text" name="numbers"/>
<button type="submit">Check</button>
</form>
</body>
</html>

<?php

if($_POST)
{
    $numbers = $_POST['numbers'];
    
    $numArray = explode(',', $numbers);
    
    $largest  = $numArray[0];
    $smallest = $numArray[0];
    
   
    foreach($numArray as $num){
        
        
        if($num > $largest){
            $largest = $num;
        }
        else if($num < $smallest){
            $smallest = $num;
        }
        
    }
    
    
    echo "Largest Number is: $largest <br />";
    echo "Smallest Number is: $smallest ";
    
}



?>