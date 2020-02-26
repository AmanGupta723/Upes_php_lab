<!doctype>
<html>
<head></head>
<body>
<form action ="" method="post">

enter the string with the space :
<input type="text" name="str">
<input type="submit">
</form>
</body>
</html>

<?php
if ($_POST)
{
    $name = $_POST["str"];
    $str1=explode(" ",$name);                      // create an array
    echo "Entered string"."<br>";
    foreach ($str1 as $nam)
    {
        echo $nam."  ";
    }

    $name1=array();
  
    $count=1;
    $k=0;
    for($i=0;$i<count($str1);$i++) 
    
    {
        $j=$i+1;
  
        
        if ( strcmp("$str1[$i]","$str1[$j]")==0)          // compare the two strings
          {
          
                    $count=$count+1;                 // counting the same type of string 
  
          }
          else
          {
              $count=1;
          }
                  if($count>1)
                          
                    {
                     $name1[$k]=$count;           // storing the counting number 
                            $k++;
                            
                            }
                           
                       }
    
    rsort($name1);                   // sort an element in desending order
    
    
    $Last_element= array_shift($name1);          // first element or  largest number
   
    
    $n=1;
    echo "<br>"."Largest Sequence of Equal Strings"."<br>";
   for($i=0;$i<count($str1);$i++)
   {
       $j=$i+1;
       if (strcmp("$str1[$i]","$str1[$j]")==0) // again comparing two string 
       {
           
           $n = $n+1;
           
       }
       else
       {
           $n=1;
           
       }
       
       
       if($n==$Last_element)        //check the largest number of same type of strings
       
           {
       
           for($t=0;$t<$Last_element;$t++)
           { 
               echo " ".$str1[$i]." ";

           }
       
           }
           if($n==$Last_element)
           {
               break;
           }
   }
 
   {
       if (count($str1)==1)
       { echo  $str1[0];
   }
}
}
   ?>