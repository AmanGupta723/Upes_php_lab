<!DOCTYPE html>
<html>
<head>
<title>grade calculation</title>
</head>
<body>
<h2> Calculation </h2><br>
<form action="" method="post">
Enter the name:
<input type="text" name="name"> <br>
Enter the Roll Number:
<input type="text" name="rn"> <br>
Enter the marks:<br>
Maths:
<input type="text" name="maths"> <br>
Science:
<input type="text" name="sci"> <br>
English:
<input type="text" name="eng"> <br>
Language:
<input type="text" name="lan"> <br>
Moral science:
<input type="text" name="mor"> <br>

<input type="submit" value="Submit"><br><br>

<?php
if($_POST){
    function cal(){
        $a=$_POST["maths"];
        $b=$_POST["sci"];
        $c=$_POST["eng"];
        $d=$_POST["lan"];
        $e=$_POST["mor"];
        echo "your name is ".$_POST['name']." and "."roll no is ".$_POST['rn']."<br>";
        echo "your grade is ";
        $i=($a+$b+$c+$d+$e)/5;
        if($i>90&&$i<=100)
            echo"O";
            elseif($i>=80&&$i<90)
            echo"A";
            elseif($i>=70&&$i<80)
            echo"B";
            elseif($i>=60&&$i<70)
            echo"C";
            elseif($i>=50&&$i<60)
            echo"D";
            else
                echo"fail";
    }
    cal();    
}

?>

</form>
</body>
</html>