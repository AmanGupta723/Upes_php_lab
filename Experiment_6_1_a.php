<!doctype html>
<html>
<head>
<body >
<form action ="" method="POST">
Enter your roll no:<br>
<input type="text" name ="roll"><br>
Enter your name:<br>
<input type="text" name ="name"><br>
Enter your age:<br>
<input type="text"name ="age"><br>
Enter your address:<br>
<input type="text" name="address"><br>
<input type="submit">

</form>
</body>
</head>
</html>



<?php
//a script to store the roll no, name, age, address, phone no of students into the 
//file called studentdetails.txt and the records should be stored in the format given below 

if($_POST)
{
    $num1 = $_POST["roll"];
    
    $str1 = $_POST["name"];
    $num2= $_POST["age"];
    $str2 = $_POST["address"];
    
    $string =$num1.":".$str1.":".$num2.":".$str2.PHP_EOL;
    $file = fopen("studentdetails.txt","a") or die("Unable to open file");
    fwrite($file,$string);
    fclose($file);
}
?>
    
    