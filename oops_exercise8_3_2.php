<!doctype html>
<html>
<head>
<p> To retrieve the data we have to fill the box <p><br>
<form action="" method="POST">
Enter the faculty name: <br>
<input type= "text" name="fac_name1"><br>
Enter the subject name: <br>
<input type= "text" name="subject1"><br>
   <input type="submit"><br>
<?php
if($_POST)

{          
        //$file = fopen("studentdetails.txt","r") or die("Unable to open file");
        $array = file("feedbackform.txt");
        $name1=$_POST['fac_name1'];
        $name2=$_POST['subject1'];
        for($i=0;$i<count($array);$i++)
        {
            if(stripos($array[$i],$name1)&&stripos($array[$i+1],$name2))
            { 
                echo $array[$i]."<br>";
               
              
                echo "Average ".$array[$i+5]."<br>";
               
            }
        }
        
    }
    
?>
</form>
</head>
</body>
</html>