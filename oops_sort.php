<!doctype html>
<html>
<head>
<body>
<form action="" method="POST">
Enter the integer with the commas<br>
<input type="text" name="N1"><br>
<input type ="submit">

</form>
</body>
</head>
</html>

<?php
$var=$_POST['N1'];
$num=explode(",",$var);
class Sorting{
  function  sort1($num)
    {
        sort($num);
        return $num;
    }
    
}
$num1=new Sorting;
print_r ($num1->sort1($num));



?>