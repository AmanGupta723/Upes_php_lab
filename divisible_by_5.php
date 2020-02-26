<!doctype html>
<html>
<head>
</head>
<body>
<form action=" " method="POST">
enter the two positve number:
1st number:
<input type ="text" name="n1" placeholder="1st number"><br>
2nd number:
<input type ="text" name="n2" placeholder="2nd number"><br>
<input type = "submit"><br>
</form>
<?php
if($_POST)
{
    $a=$_POST['n1'];
    $b=$_POST['n2'];
  
    for($i=$a;$i<=$b;$i++)
    {
        ;
        if($i%5==0)
        {
            echo  $i." divisible by 5<br>";
        }
    }
}
?>

</body>
</html>